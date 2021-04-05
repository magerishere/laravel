@extends('layouts.backend.main')


@section('content')
<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
            <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">پروفایل</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
<div class="row mb-4">
<div class="col-xl-4">
<div class="card h-100">
    <div class="card-body">
        <div class="text-center">
            <div class="dropdown float-end">
                
                    <a href="{{ route('user.edit',$user->id) }}" ><i class="fa fa-edit"></i></a>
                
               
            </div>
            <div class="clearfix"></div>
            <div>
                <img src="{{ $user->image ? '/' . $user->image->url : '/storage/images/man-avatar.jfif' }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
            </div>
            <h5 class="mt-3 mb-1">{{ $user->name }}</h5>
            <p class="text-muted">{{ $user->meta ? $user->meta->ability : '' }}</p>

            <div class="mt-4">
                <a href="{{ route('message.create') }}" class="btn btn-light btn-sm"><i class="uil uil-envelope-alt me-2"></i>
                    ارسال پیام</a>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-muted">
            <h5 class="font-size-16">درباره</h5>
            <p>{{ $user->meta ? $user->meta->about : '' }}</p>
            <div class="table-responsive mt-4">
                <div>
                    <p class="mb-1">نام :</p>
                    <h5 class="font-size-16">{{ $user->meta ? $user->meta->fname : '' }}</h5>
                    <p class="mb-1">نام خانوادگی :</p>
                    <h5 class="font-size-16">{{ $user->meta ? $user->meta->lname : '' }}</h5>
                </div>
                <div class="mt-4">
                    <p class="mb-1">شماره همراه :</p>
                    <h5 class="font-size-16">{{ $user->meta ? $user->meta->phone_number : '' }}</h5>
                </div>
                <div class="mt-4">
                    <p class="mb-1">ایمیل :</p>
                    <h5 class="font-size-16">{{ $user->meta ? $user->meta->email : '' }}</h5>
                </div>
                <div class="mt-4">
                    <p class="mb-1">آدرس :</p>
                    <h5 class="font-size-16">{{ $user->meta ? $user->meta->address : '' }}</h5>
                </div>
                @if (!$user->meta)
                    
                <div class="mt-4">
                    <p class="mb-1">پروفایل شما تاکنون ویرایش نشده است! <span><a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">ویرایش کنید</a></span> </p>
                    
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
</div>

<div class="col-xl-8">
<div class="card mb-0">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
      
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#tasks" role="tab">
                <i class="uil uil-clipboard-notes font-size-20"></i>
                <span class="d-none d-sm-block">درخواست ها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                <i class="uil uil-envelope-alt font-size-20"></i>
                <span class="d-none d-sm-block">پیغام ها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#about" role="tab">
                <i class="uil uil-user-circle font-size-20"></i>
                <span class="d-none d-sm-block">تنظیمات</span>
            </a>
        </li>
    </ul>
    <!-- Tab content -->
    <div class="tab-content p-4">
        @include('messages')
        <div class="tab-pane active" id="tasks" role="tabpanel">
            <div>
                <h5 class="font-size-16 mb-3">Active</h5>

                <div class="table-responsive">
                    <table class="table table-nowrap table-centered">
                        <tbody>
                            <tr>
                                <td style="width: 60px;">
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck2">
                                        <label class="form-check-label" for="tasks-activeCheck2"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Ecommerce Product Detail</a>
                                </td>

                                <td>27 May, 2020</td>
                                <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">Active</span></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                        <label class="form-check-label" for="tasks-activeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Ecommerce Product</a>
                                </td>

                                <td>26 May, 2020</td>
                                <td><span class="badge bg-soft-primary font-size-12">Active</span></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="font-size-16 my-3">Upcoming</h5>

                <div class="table-responsive">
                    <table class="table table-nowrap table-centered">
                        <tbody>
                            <tr>
                                <td style="width: 60px;">
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck3">
                                        <label class="form-check-label" for="tasks-upcomingCheck3"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Chat app Page</a>
                                </td>

                                <td>-</td>
                                <td style="width: 160px;"><span class="badge bg-soft-secondary font-size-12">Waiting</span></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck2">
                                        <label class="form-check-label" for="tasks-upcomingCheck2"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Email Pages</a>
                                </td>

                                <td>04 June, 2020</td>
                                <td><span class="badge bg-soft-primary font-size-12">Approved</span></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck1">
                                        <label class="form-check-label" for="tasks-upcomingCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Contacts Profile Page</a>
                                </td>

                                <td>-</td>
                                <td><span class="badge bg-soft-secondary font-size-12">Waiting</span></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="font-size-16 my-3">Complete</h5>

                <div class="table-responsive">
                    <table class="table table-nowrap table-centered">
                        <tbody>
                            <tr>
                                <td style="width: 60px;">
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-completeCheck3">
                                        <label class="form-check-label" for="tasks-completeCheck3"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">UI Elements</a>
                                </td>

                                <td>27 May, 2020</td>
                                <td style="width: 160px;"><span class="badge bg-soft-success font-size-12">Complete</span></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-completeCheck2">
                                        <label class="form-check-label" for="tasks-completeCheck2"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Authentication Pages</a>
                                </td>

                                <td>27 May, 2020</td>
                                <td><span class="badge bg-soft-success font-size-12">Complete</span></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-completeCheck1">
                                        <label class="form-check-label" for="tasks-completeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">user Layout</a>
                                </td>

                                <td>26 May, 2020</td>
                                <td><span class="badge bg-soft-success font-size-12">Complete</span></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel">
            <div>
                <div data-simplebar="init" style="max-height: 430px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="left: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                    <div class="d-flex align-items-start border-bottom py-4">
                        <img class="me-2 rounded-circle avatar-xs" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-3.jpg" alt="">
                        <div class="flex-1">
                            <h5 class="font-size-15 mt-0 mb-1">Marion Walker <small class="text-muted float-end">1 hr ago</small></h5>
                            <p class="text-muted">If several languages coalesce, the grammar of the resulting .
                            </p>

                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                            <div class="d-flex align-items-start mt-4">
                                <img class="me-2 rounded-circle avatar-xs" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-4.jpg" alt="">
                                <div class="flex-1">
                                    <h5 class="font-size-15 mt-0 mb-1">Shanon Marvin <small class="text-muted float-end">1 hr ago</small></h5>
                                    <p class="text-muted">It will be as simple as in fact, it will be
                                        Occidental. To it will seem like simplified .</p>


                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block">
                                        <i class="mdi mdi-reply"></i> Reply
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start border-bottom py-4">
                        <img class="me-2 rounded-circle avatar-xs" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-5.jpg" alt="">
                        <div class="flex-1">
                            <h5 class="font-size-15 mt-0 mb-1">Janice Morgan <small class="text-muted float-end">2 hrs ago</small></h5>
                            <p class="text-muted">To achieve this, it would be necessary to have uniform
                                pronunciation.</p>

                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                        </div>
                    </div>

                    <div class="d-flex align-items-start border-bottom py-4">
                        <img class="me-2 rounded-circle avatar-xs" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/users/avatar-7.jpg" alt="">
                        <div class="flex-1">
                            <h5 class="font-size-15 mt-0 mb-1">Patrick Petty <small class="text-muted float-end">3 hrs ago</small></h5>
                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit </p>

                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                        </div>
                    </div>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>

                <div class="border rounded mt-4">
                    <form action="#">
                        <div class="px-2 py-1 bg-light">

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="uil uil-link"></i></button>
                                <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="uil uil-smile"></i></button>
                                <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none"><i class="uil uil-at"></i></button>
                            </div>

                        </div>
                        <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your Message..."></textarea>

                    </form>
                </div> <!-- end .border-->
            </div>
        </div>
        <div class="tab-pane" id="about" role="tabpanel">
            <section id="basic-example-p-2" role="tabpanel" aria-labelledby="basic-example-h-2" class="body current" aria-hidden="false" style="">
                <div>
                    <form action="{{ route('user.changePassword') }}" method="POST">
                        @csrf
                    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label>رمزعبور فعلی</label>
                                    <input type="password" name="oldPassword" class="form-control" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label>رمزعبور جدید</label>
                                    <input type="password" name="newPassword" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label>تکرار رمزعبور جدید</label>
                                    <input type="password" name="newPassword_confirmation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <input type="submit" value="تغییر رمزعبور" class="btn btn-primary">
                                    <span class="text-muted">پس از تغییر به صورت خودکار از اکانت خارج میشوید!</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
    </div>
    </div>
</div>
</div>
</div>
<!-- end row -->
    </div> <!-- content -->
</div>
    
@endsection