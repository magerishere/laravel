@extends('layouts.backend.main')

@section('content')
<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
            <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">Read Email</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
        <li class="breadcrumb-item active">Read Email</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
<div class="row">
<div class="col-12">
<!-- Left sidebar -->
@include('user.message.sidebar')
<!-- End Left sidebar -->

<!-- Right Sidebar -->
<div class="email-rightbar mb-3">

    <div class="card">
       
        <div id="noSelectedUserError"></div>

        <div class="card-body">
            @include('messages')
            <h5>ارسال به</h5>
            <div class="d-flex align-items-start mb-4" id="listOfSearch">
            </div>
            
            <div class="mb-3">
                <input type="text" name="to" id="search" class="form-control">
                <span id="selector">
                </span>
                <div class="loader"></div>
                </div>
                <div class="mb-3">
                    <textarea name="body" id="editor" cols="30" rows="10" placeholder="متن پیام شما..."></textarea>
                </div>
                <hr>
                    <button onclick="sendMessage()" class="btn btn-primary waves-effect mt-4"><i class="mdi mdi-reply"></i> ارسال آنی </button>
                    <button onclick="sendMessage()" class="btn btn-info waves-effect mt-4"><i class="mdi mdi-reply"></i> ارسال در زمان مشخص </button>
            
                    <select name="timer" id="timer" class="form-select">
                        <option value="0">چند ساعت بعد...؟</option>
                        <option value="1">یک ساعت بعد</option>
                        <option value="2">دو ساعت بعد</option>
                        <option value="3">سه ساعت بعد</option>
                        <option value="4">چهار ساعت بعد</option>
                        <option value="5">پنج ساعت بعد</option>
                        <option value="6">شش ساعت بعد</option>
                        <option value="7">هفت ساعت بعد</option>
                        <option value="8">هشت ساعت بعد</option>
                        <option value="9">نه ساعت بعد</option>
                        <option value="10">ده ساعت بعد</option>
                    </select>
                  <span>  <div id="emptyMessageBodyError"></div> </span>
               

        </div>

    </div>
</div>
<!-- card -->

</div>
<!-- end Col-9 -->

</div>
<!-- end row -->

@endsection


@section('footer')
<script>

    
    let selector;
    let names = [];
    var delay = (function(){
    var timer = 0;

    return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
    };
    })();

    $('#search').keyup(function() {
        const search = $(this).val();
        if(search.length > 0) {
            document.getElementsByClassName('loader')[0].style.display = 'block';
        } else {
            document.getElementsByClassName('loader')[0].style.display = 'none';
        }
        if(document.getElementById('selectorInput')) document.getElementById('selectorInput').remove();
    delay(function(){
        if(search.length >= 1) {
            document.getElementById('selector').innerHTML = '';
        
            $.ajax({
                url: '/message/search',
                type: "post",
                data: {search},
                success:function(res) {
                    document.getElementsByClassName('loader')[0].style.display = 'none';
                    if(res.users.length > 0) {
                        selector = `<select 
                        class="form-select" 
                        multiple 
                        onchange="selectorHandler()"
                        id="selectorInput"
                        >
                            ${res.users.map(user => {
                                
                                return "<option value='" + user.name + "'>" + user.name + "</option>"
                            })}
                        </select>`;
                    } else {
                        selector = "<h5 class='text-danger'>کاربری با این اسم وجود ندارد!</h5>"
                    }
                    $('#selector').append(selector);
                },error:function(e) {
                    selector = "<div class='alert alert-danger'>خطا! دوباره تلاش کنید</div>"
                    $('#selector').append(selector);

                },
            });
        }
       
    }, 1000 );
    });

    const selectorHandler = () => {
        console.log(names);
        // event select tag html
        const e = document.getElementById('selectorInput');
        let id = e.value;  
        let name = e.options[e.selectedIndex].text; // inner html of select tag
        let imageUrl;
        let form;
        const index = names.indexOf(String(id));
            if(index > -1) {
                names.splice(index,1);
                document.getElementById(`user${id}`).remove();
            } else {
                names.push(String(id));
                document.getElementById('noSelectedUserError').innerHTML = '';
                $.ajax({
                    url: '/message/get/image/user',
                    type : 'POST',
                    data: {id},
                    success:function(res) {
                        imageUrl = res.url;
                        form = `<div id='user${id}'>
                                    <img class="d-flex me-3 rounded-circle avatar-sm" src="/${imageUrl}" alt="user image">
                                    <div class="flex-1">
                                        <h5 class="font-size-14 my-1">${name}</h5>
                                    </div>
                                </div>`
                        document.getElementById('listOfSearch').innerHTML += form;
                    },error:function(err) {
                        form = "<div class='alert alert-danger'>خطا! دوباره تلاش کنید</div>";
                        document.getElementById('listOfSearch').innerHTML = form;
                    },
                });
            }
    }


    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            language: 'fa'
        } ).then(editor => {
            myeditor = editor;
        })
        .catch( error => {
            console.error( error );
        } );

    const sendMessage = () => {
        let body = myeditor.getData();
        let timer = document.getElementById('timer').value;
        if(body.length > 0 && names.length > 0) {
            $.ajax({
                url: '/message/multi/send',
                type: 'post',
                data: {names,body,timer},
                success:function(res) {
                    location.reload();
                },error:function(err) {
                    console.log(err)
                },
            });
        } else {
            if(body.length == 0) {
                form = "<div class='alert alert-danger text-center col-md-6 mx-auto'>متن پیام شما خالیست!</div>";
                document.getElementById('emptyMessageBodyError').innerHTML = form;     

            }
            if(names.length == 0) {
                form = "<div class='alert alert-danger text-center col-md-6 mx-auto'>دریافت کننده ای انتخاب نکردید!</div>";
                document.getElementById('noSelectedUserError').innerHTML = form;     
            }
        }
    }

 
  
   </script>


@endsection