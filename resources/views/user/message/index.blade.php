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
<div class="email-leftbar card">
    <a href="{{ route('message.create') }}" class="btn btn-danger btn-block waves-effect waves-light">
        جدید
    </a>
    <div class="mail-list mt-4">
        <a href="#" class="active"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i> صندوق ورودی
            <span class="ms-1 float-end">(18)</span></a>
        <a href="#"><i class="mdi mdi-star-outline font-size-16 align-middle me-2"></i>مهم</a>
        <a href="#"><i class="mdi mdi-file-outline font-size-16 align-middle me-2"></i>پیش نویس</a>
        <a href="#"><i class="mdi mdi-email-check-outline font-size-16 align-middle me-2"></i>ارسال شده</a>
        <a href="#"><i class="mdi mdi-trash-can-outline font-size-16 align-middle me-2"></i>زباله دان</a>
    </div>


    <h6 class="mt-4">Labels</h6>

    <div class="mail-list mt-1">
        <a href="#"><span class="mdi mdi-circle-outline text-info float-end"></span>Theme Support</a>
        <a href="#"><span class="mdi mdi-circle-outline text-warning float-end"></span>Freelance</a>
        <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>Social</a>
        <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>Friends</a>
        <a href="#"><span class="mdi mdi-circle-outline text-success float-end"></span>Family</a>
    </div>

    <h6 class="mt-4">Chat</h6>

    <div class="mt-2">
        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Scott Median</p>
                <p class="text-muted text-truncate">Hello</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Julian Rosa</p>
                <p class="text-muted text-truncate">What about our next..</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">David Medina</p>
                <p class="text-muted text-truncate">Yeah everything is fine</p>
            </div>
        </a>

        <a href="#" class="d-flex align-items-start">
            <img class="d-flex me-3 rounded-circle" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="36">
            <div class="flex-1 chat-user-box overflow-hidden">
                <p class="user-title m-0">Jay Baker</p>
                <p class="text-muted text-truncate">Wow that's great</p>
            </div>
        </a>

    </div>
</div>
<!-- End Left sidebar -->


<!-- Right Sidebar -->
<div class="email-rightbar mb-3">

    <div class="card">
        <div class="btn-toolbar p-3" role="toolbar">
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" id="deleteAllSelectorBtn" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" disabled> 
                    بیشتر <i class="mdi mdi-dots-vertical ms-2"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" onclick="multiUnread()">تبدیل به  پیام خوانده نشده <i class="fa fa-eye"></i></a>
                    <a class="dropdown-item" href="#" onclick="multiImportant()">تبدیل به پیام مهم <i class="fa fa-star-o"></i></a>
                    <a class="dropdown-item" href="#" onclick="deleteAllSelector()">انتقال به زباله دان <i class="fa fa-trash-o"></i></a>
                 
                </div>
                <div id="atLeastOneError"></div>
            </div>
            
        </div>
        @include('messages')
        <div id="multiDestroyMessage" class="alert alert-danger text-center"  style="display: none"> مشکلی پیش آمد! دوباره تلاش کنید</div>
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
                                <span class="text-danger">New</span>   
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
                            <i class="fa fa-eye-slash"></i>
                        @else
                            <a href="{{ route('message.show',$message->id) }}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
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

    </script>
@endsection