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
          
            <div class="clearfix"></div>
            <div>
                <img src="{{  $admin->image ? '/' . $admin->image->url : '/storage/images/man-avatar.jfif' }}" alt="Avatar image" class="avatar-lg rounded-circle img-thumbnail">
            </div>
            <h5 class="mt-3 mb-1">{{ $admin->name }}</h5>
            <p class="text-muted">{{ $admin->meta ? $admin->meta->ability : '' }}</p>

            <div class="mt-4">
                <button type="button" class="btn btn-light btn-sm" disabled><i class="uil uil-envelope-alt me-2"></i>
                    ارسال پیام</button>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-muted">
            <h5 class="font-size-16">درباره</h5>
            <p>{{ $admin->meta ? $admin->meta->about : '' }}</p>
            <div class="table-responsive mt-4">
                <div>
                    <p class="mb-1">نام :</p>
                    <h5 class="font-size-16">{{ $admin->meta ? $admin->meta->fname : '' }}</h5>
                    <p class="mb-1">نام خانوادگی :</p>
                    <h5 class="font-size-16">{{ $admin->meta ? $admin->meta->lname : '' }}</h5>
                </div>
                <div class="mt-4">
                    <p class="mb-1">شماره همراه :</p>
                    <h5 class="font-size-16">{{ $admin->meta ? $admin->meta->phone_number : '' }}</h5>
                </div>
                <div class="mt-4">
                    <p class="mb-1">ایمیل :</p>
                    <h5 class="font-size-16">{{ $admin->meta ? $admin->meta->email : '' }}</h5>
                </div>
                <div class="mt-4">
                    <p class="mb-1">آدرس :</p>
                    <h5 class="font-size-16">{{ $admin->meta ? $admin->meta->address : '' }}</h5>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<div class="col-xl-8">
<div class="card mb-0">
    <div class="tab-content p-4">
            <div>
                @include('messages')
                <h5 class="font-size-16 mb-3">ویرایش پروفایل <a href="{{ route('admin.show',$admin->id) }}" class="float-end"><i class="fas fa-arrow-alt-circle-left" style="font-size: 26px"></i></a></h5>
                <form action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="admin_id" value="{{ $admin->id }}">
                    <div class="form-group">
                        <label for="url">عکس پروفایل</label>
                        <input type="file" class="form-control" name="url">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="ability">مهارت ها</label>
                        <input type="text" class="form-control" name="ability" placeholder="طراح سایت" value="{{ $admin->meta ? $admin->meta->ability : '' }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="about">درباره</label>
                        <textarea name="about" cols="30" rows="5" class="form-control" placeholder="سلام من علی خوشکار طراح سایت هستم. این یک متن نمونه برای راهنمایی است. لطفا به طور مختصر خود را معرفی کنید">{{ $admin->meta ? $admin->meta->about : '' }}</textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fname">نام</label>
                            <input type="text" class="form-control" name="fname" placeholder="علی" value="{{ $admin->meta ? $admin->meta->fname : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">نام خانوادگی</label>
                            <input type="text" class="form-control" name="lname" placeholder="خوشکار" value="{{ $admin->meta ? $admin->meta->lname : '' }}">
                        </div>
                    </div>
                        
                    <br>
                    <div class="form-group">
                        <label for="phone_number"><strong>شماره تلفن همراه</strong> <span class="text-muted"> نزد ما محفوظ میماند! </span></label>
                        <input type="text" class="form-control" maxlength="11" name="phone_number" placeholder="09366842860" value="{{ $admin->meta ? $admin->meta->phone_number : '' }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="email" class="form-control" name="email" placeholder="immagerishere@gmail.com" value="{{ $admin->meta ? $admin->meta->email : '' }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="address"><strong>آدرس</strong> <span class="text-muted"> نزد ما محفوظ میماند!</span></label>
                        <input type="text" class="form-control" name="address" placeholder="تهران منطقه 17 خیابان کوچه ..." value="{{ $admin->meta ? $admin->meta->address : '' }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">ویرایش پروفایل</button>
                </form>

            
            </div>
        
    </div>
</div>
</div>
</div>
<!-- end row -->
    </div> <!-- content -->
</div>
    
@endsection