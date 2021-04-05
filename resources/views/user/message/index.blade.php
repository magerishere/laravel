@extends('layouts.backend.main')

@section('content')
<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
            <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">Inbox</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
        <li class="breadcrumb-item active">Inbox</li>
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
        <div class="row">

            <div class="btn-toolbar p-3 col-md-3" role="toolbar">
                <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" id="deleteAllSelectorBtn" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" disabled> 
                        بیشتر <i class="mdi mdi-dots-vertical ms-2"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" onclick="multiUnread()">تبدیل به  پیام خوانده نشده <i class="fa fa-eye"></i></a>
                        <a class="dropdown-item" href="#" onclick="multiImportant()">تبدیل به پیام مهم <i class="fa fa-star"></i></a>
                        <a class="dropdown-item" href="#" onclick="deleteAllSelector()">انتقال به زباله دان <i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="atLeastOneError"></div>
                @include('messages')
                <div id="multiDestroyMessage" class="alert alert-danger text-center"  style="display: none"> مشکلی پیش آمد! دوباره تلاش کنید</div>
            </div>
            <div class="col-md-3">
                <div class="btn-toolbar p-3" role="toolbar">
                    <div class="btn-group me-2 mb-2 mb-sm-0">
                        <button type="button" id="deleteAllSelectorBtn" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 
                            فیلتر <i class="mdi mdi-dots-vertical ms-2"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript: void(0)" onclick="filterMessage('all')">همه</a>
                            <a class="dropdown-item" href="javascript: void(0)" onclick="filterMessage('new')">فقط پیام های <span><small class="text-danger">جدید</small></span></a>
                            <a class="dropdown-item" href="javascript: void(0)" onclick="filterMessage('important')">فقط پیام های مهم <i class="fa fa-star"></i></a>
                            <a class="dropdown-item" href="javascript: void(0)" onclick="filterMessage('notImportant')">فقط پیام های غیر مهم <i class="fa fa-star-o"></i></a>
                            <a class="dropdown-item" href="javascript: void(0)" onclick="filterMessage('seen')">فقط پیام های دیده شده <i class="fa fa-envelope-open-o"></i></a>
                            <a class="dropdown-item" href="javascript: void(0)" onclick="filterMessage('unseen')">فقط پیام های دیده نشده <i class="fa fa-envelope"></i></a>
                        </div>
                        <div id="atLeastOneError"></div>
                    </div>
                </div>
            </div>
        </div>
      
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center align-middle"><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                    <th class="text-center align-middle">وضعیت</th>
                    <th class="text-center align-middle">عکس</th>
                    <th class="text-center align-middle">نام</th>
                    <th class="text-center align-middle">پیام</th>
                    <th class="text-center align-middle">تاریخ ارسال <i class="fa fa-history btn btn-info" onclick="changeDateHandler()"></i></th>
                    <th class="text-center align-middle">مشاهده</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)   
                    <tr>
                        <td class="text-center align-middle"> 
                            <input type="checkbox" name="checkBox[]" value="{{ $message->id }}" onclick="checkBoxHandler({{ $message->id }})">
                        </td>
                        <td>
                            @if (Redis::zScore('messages',"message:$message->id:important"))
                                <a href="javascript: void(0)"><i data-value="{{ $message->id }}" class="fa fa-star"></i> </a>
                            @else
                                <a href="javascript: void(0)"><i  data-value="{{ $message->id }}" class="fa fa-star-o"></i> </a>
                            @endif
                            @if ($message->created_at->isToday())
                                @if (!Redis::zScore('messages',"message:$message->id:read"))
                                    <span class="text-danger"><small class="fa-new">جدید</small></span>
                                @else   
                                    <span class="text-danger"><small class="fa-old"><small></span>
                                @endif
                            @endif
                        </td>
                        <td class="text-center align-middle">
                            <img width="40px" src="{{ $message->user->image ? '/' . $message->user->image->url : '/storage/images/man-avatar.jfif' }}" alt="Image user">
                        
                        </td>
                        <td class="text-center align-middle">{{ $message->user->name }}</td>
                        <td class="text-center align-middle">{!! Str::limit($message->body,30)  !!}</td>
                        <td class="text-center align-middle">
                            <div class="currentDate" style="display: none">
                                {{ \Morilog\Jalali\Jalalian::fromCarbon($message->created_at)->format('Y/m/d') }}
                            </div>
                            <div class="diffForHumans">
                                {{ $message->created_at->diffForHumans() }}
                            </div>
                        </td>
                        <td class="text-center align-middle">

                            @if (Redis::zScore('messages',"message:$message->id:read"))
                                <a href="{{ route('message.show',$message->id) }}">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true" style="font-size: 25px"></i>
                                </a>
                            @else
                                <a href="{{ route('message.show',$message->id) }}">
                                    <i class="fa fa-envelope" aria-hidden="true" style="font-size: 25px"></i>
                                </a>
                            @endif
                        </td>
                    </tr>        

                @endforeach

            </tbody>
        </table>
       {{ $messages->links() }}
    </div> <!-- card -->

    <div class="row">
        <div class="col-7">
            Showing 1 - 20 of 1,524
        </div>
        <div class="col-5">
            <div class="btn-group float-end">
                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

</div> <!-- end Col-9 -->

</div>

</div><!-- End row -->

@endsection

@section('footer')
    <script>
        let id;
        let that;
        $('.fa-star').click(function(){
            id = $(this).data('value');
            that = $(this);
            $.ajax({
                url: '/message/important',
                type: 'post',
                data: {id},
                success:function(res) {
                    that.toggleClass('fa-star-o');
                    that.toggleClass('fa-star');
                },error:function(err) {
                    document.getElementById('atLeastOneError').innerHTML = "<h5 class='text-danger'>خطا! دوباره تلاش کنید</h5>";
                },
            });
        });
        $('.fa-star-o').click(function(){
            id = $(this).data('value');
            that = $(this);
            $.ajax({
                url: '/message/important',
                type: 'post',
                data: {id},
                success:function(res) {
                    that.toggleClass('fa-star-o');
                    that.toggleClass('fa-star');
                },error:function(err) {
                    document.getElementById('atLeastOneError').innerHTML = "<h5 class='text-danger'>خطا! دوباره تلاش کنید</h5>";
                },
            });
            
        });

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        let ids = [];
        let value;
        let search;
        let basicData = false;

        const checkBoxHandler = (id) => {
            const index = ids.indexOf(String(id));
            if(index > -1) {
                ids.splice(index,1);
            } else {
                ids.push(String(id));
            }
            if(ids.length > 0) {
                document.getElementById('deleteAllSelectorBtn').disabled = false;
                document.getElementById('atLeastOneError').innerHTML = '';
            } else { 
                document.getElementById('deleteAllSelectorBtn').disabled = true;
            }
       
        }

        const checkBoxAll = () => {
            let inp = document.getElementsByName('checkBox[]');
            ids = [];
            
                for(let i = 0;i < inp.length;i++) {
                    if(document.getElementById('checkBoxAll').checked) {
                        inp[i].checked = true;
                        ids.push(inp[i].value);
                    } else { 
                        inp[i].checked = false;
                        ids = [];
                    }
            } 
            if(ids.length > 0) {
                document.getElementById('deleteAllSelectorBtn').disabled = false;
                document.getElementById('atLeastOneError').innerHTML = '';
            } else { 
                document.getElementById('deleteAllSelectorBtn').disabled = true;
            }
        }

        const deleteAllSelector = () => {
                if(ids.length > 0) 
                {
                    Swal.fire({
                    title: 'موارد انتخاب شده پس از حذف به زباله دان انتقال داده میشوند!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#808080',
                    confirmButtonText: 'انتقال به زباله دان!',
                    cancelButtonText: 'انصراف',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/message/multidestroy',
                                type: 'POST',
                                data: {ids},
                                success:function(res) {
                                    location.reload();
                                },
                                error:function(e) {
                                    document.getElementById('multiDestroyMessage').style.display = 'block';
                               
                                }
                            });
                        }
                    });
                } else {
                    document.getElementById('atLeastOneError').innerHTML = "<h5 class='text-danger'>حداقل یک پیام را انتخاب کنید</h5>"
                }
            }
        
        const numberOfPerPageHandler = () => {
            value = document.getElementById('numberOfPerPage').value;
            search = urlParams.get('search') ? urlParams.get('search') : '';
            $.ajax({
                url:'/message',
                type:'get',
                success:function(res){
                    window.location.href = `http://laravel.test/message?search=${search}&value=${value}`;
                },error:function(e){
                    document.getElementById('multiDestroyMessage').style.display = 'block';

                },
            });
        }

        const searchHandler = () => {
            search = document.getElementById('search').value;
            value = urlParams.get('value') ? urlParams.get('value') : 10;
            $.ajax({
                url:'/message',
                type:'get',
                success:function(res) {
                    window.location.href = `http://laravel.test/message?search=${search}&value=${value}`;
                },error:function(e){
                    document.getElementById('multiDestroyMessage').style.display = 'block';

                },
            });
        }

        const changeDateHandler = () => {
            basicData = !basicData;
           let diffForHumans =  document.getElementsByClassName('diffForHumans');
           let currentDate =  document.getElementsByClassName('currentDate');
           
            for(let i = 0;i < diffForHumans.length;i++) {
                if(basicData) {
                    diffForHumans[i].style.display = 'none';
                    currentDate[i].style.display = 'block';
                } else {
                    diffForHumans[i].style.display = 'block';
                    currentDate[i].style.display = 'none';
                }
            
            }
           
           
        }

        const multiUnread = () => {
            $.ajax({
                url: '/message/multi/unread',
                type:'post',
                data:{ids},
                success:function(res) {
                    location.reload();
                },error:function(res) {
                    document.getElementById('atLeastOneError').innerHTML = "<h5 class='text-danger'>خطا! دوباره تلاش کنید</h5>";
                },
            });
        }


        const multiImportant = () => {
            $.ajax({
                url: '/message/multi/important',
                type:'post',
                data:{ids},
                success:function(res) {
                    location.reload();
                },error:function(res) {
                    document.getElementById('atLeastOneError').innerHTML = "<h5 class='text-danger'>خطا! دوباره تلاش کنید</h5>";
                },
            });
        }

        const filterMessage = (value) => {
            // font awesome icons
            let faStar = $('.fa-star');
            let faStarO = $('.fa-star-o');
            let faEnvelope = $('.fa-envelope');
            let faEnvelopeOpen = $('.fa-envelope-open-o');
            let faNew = $('.fa-new');
            let faOld = $('.fa-old');
            let oldFilter;
            let newFilter;
            // Filter just show important message and hide not important message!
            if(value == 'important') {
                oldFilter = faStar.parent().parent().parent();
                newFilter = faStarO.parent().parent().parent();
            }
             // Filter just show not important message and hide message important message!
            if(value == 'notImportant') {
                oldFilter = faStarO.parent().parent().parent();
                newFilter = faStar.parent().parent().parent();
            }
            // Filter just show seen message and hide unseen message!;
            if(value == 'seen') {
                oldFilter = faEnvelopeOpen.parent().parent().parent(); 
                newFilter = faEnvelope.parent().parent().parent(); 
            }
            if(value == 'unseen') {
                oldFilter = faEnvelope.parent().parent().parent(); 
                newFilter = faEnvelopeOpen.parent().parent().parent();  
            }
            if(value == 'new') {
                oldFilter = faNew.parent().parent().parent(); 
                newFilter = faOld.parent().parent().parent();  
            }
            if(value == 'all') {
                $('tr').show();
            }
            if(oldFilter && newFilter) {
                oldFilter.closest("tr").show(); // filtered of show
                newFilter.closest("tr").hide(); // filtered of hide
            }
        }

    </script>
@endsection