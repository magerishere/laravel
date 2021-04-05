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

        <div class="card-body">
            @include('messages')
            <div class="d-flex align-items-start mb-4">
                <img class="d-flex me-3 rounded-circle avatar-sm" src="{{ $message->user->image ? '/' . $message->user->image->url : '/storage/images/man-avatar.jfif' }}" alt="Generic placeholder image">
                <div class="flex-1">
                    <h5 class="font-size-14 my-1">{{ $message->user->name }}</h5>
                    <small class="text-muted">support@domain.com</small>
                </div>
            </div>

            <p>{!! $message->body !!}
            </p>
           
            <hr>

            <div class="row">
                <div class="col-xl-2 col-6">
                    <div class="card border shadow-none">
                        <img class="card-img-top img-fluid" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/small/img-3.jpg" alt="Card image cap">
                        <div class="py-2 text-center">
                            <a href="" class="fw-medium">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-6">
                    <div class="card border shadow-none">
                        <img class="card-img-top img-fluid" src="http://minible-h-rtl.laravel.themesbrand.com/assets/images/small/img-4.jpg" alt="Card image cap">
                        <div class="py-2 text-center">
                            <a href="" class="fw-medium">Download</a>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('message.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $message->from }}">
                <textarea name="body" id="editor" cols="30" rows="10"></textarea>
            
                <button type="submit" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i> ارسال پاسخ</button>
            </form>
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
        
        ClassicEditor
        .create( document.querySelector( '#editor' ), {
            language:'fa',
        } )
        .catch( error => {
            console.error( error );
        } );

    </script>
@endsection