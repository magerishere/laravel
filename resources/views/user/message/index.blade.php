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
        <a href="#"><i class="mdi mdi-star-outline font-size-16 align-middle me-2"></i>نشانک</a>
        <a href="#"><i class="mdi mdi-diamond-stone font-size-16 align-middle me-2"></i>مهم</a>
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
                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Updates</a>
                    <a class="dropdown-item" href="#">Social</a>
                    <a class="dropdown-item" href="#">Team Manage</a>
                </div>
            </div>
            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Updates</a>
                    <a class="dropdown-item" href="#">Social</a>
                    <a class="dropdown-item" href="#">Team Manage</a>
                </div>
            </div>

            <div class="btn-group me-2 mb-2 mb-sm-0">
                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    More <i class="mdi mdi-dots-vertical ms-2"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mark as Unread</a>
                    <a class="dropdown-item" href="#">Mark as Important</a>
                    <a class="dropdown-item" href="#">Add to Tasks</a>
                    <a class="dropdown-item" href="#">Add Star</a>
                    <a class="dropdown-item" href="#">Mute</a>
                </div>
            </div>
        </div>
        <ul class="message-list">
            @if ($messages->count() > 0)
                
                @foreach ($messages as $message)
                <li>
                    <div class="col-mail col-mail-1">
                        <div class="checkbox-wrapper-mail">
                            <input type="checkbox" id="chk19">
                            <label for="chk19" class="toggle"></label>
                        </div>
                        <a href="{{ route('message.show',$message->id) }}" class="title"> <img width="50px" src="{{ $message->user->image ? '/' . $message->user->image->url : '/storage/images/man-avatar.jfif' }}" alt="">
                            {{ $message->user->name }} 
                        </a><span class="star-toggle far fa-star"></span>
                    </div>
                    <div class="col-mail col-mail-2">
                        <a href="{{ route('message.show',$message->id) }}" class="subject"><span class="teaser">{!! $message->body !!}</span>
                        </a>
                        <div class="date">{{ $message->created_at }}</div>
                    </div>
                </li>
                @endforeach
            @else
                <h4 class="text-center">پیامی وجود ندارد!</h4>
            @endif
        </ul>

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