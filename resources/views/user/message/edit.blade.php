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
        
                <form action="{{ route('message.update',$message->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="mb-3">
                        <textarea name="body" id="editor" cols="30" rows="10">{{ $message->body }}</textarea>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary waves-effect mt-4"><i class="mdi mdi-reply"></i> ویرایش </button>
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
            language: 'fa'
        } ).then(editor => {
            myeditor = editor;
        })
        .catch( error => {
            console.error( error );
        } );

   </script>


@endsection