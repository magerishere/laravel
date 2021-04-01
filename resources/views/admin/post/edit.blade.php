@extends('layouts.backend.main')

@section('content')

<div class="page-content">
  <!-- Start content -->
  <div class="container-fluid">
          <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">ویرایش مطلب</h4>

<div class="page-title-right">
  <ol class="breadcrumb m-0">
      <li class="breadcrumb-item"><a href="javascript: void(0);">#{{ $post->id }}</a></li>
      <li class="breadcrumb-item active">ویرایش</li>
  </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
<div class="row">
<div class="col-lg-12">
<div id="addproduct-accordion" class="custom-accordion">
  <div class="card">
      <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
          <div class="p-4">

              <div class="d-flex align-items-center">
                  <div class="me-3">
                      <div class="avatar-xs">
                          <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                              01
                          </div>
                      </div>
                  </div>
                  <div class="flex-1 overflow-hidden">
                      <h5 class="font-size-16 mb-1">مشخصات نویسنده</h5>
                      <p class="text-muted text-truncate mb-0">Fill all information below</p>
                    </div>
                    @include('messages')
                    <img width="100px" src="{{ $post->image ? '/' . $post->image->url : '/storage/images/laravel.jfif' }}" alt="">
                  <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
              </div>

          </div>
      </a>

      <div class="collapse show">
          <div class="p-4 border-top">
           
              <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                  <div class="mb-3">
                      <label class="form-label" for="productname">عنوان مطلب</label>
                      <input id="productname" name="title" type="text" value="{{ $post->title }}" class="form-control">
                  </div>
                 
                  <div class="row">
                      <div class="col-md-6">
                          <div class="mb-3">
                              <label class="form-label">دسته بندی</label>
                              <select name="name" class="form-select select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="{{ $post->category->first()->id }}">{{ $post->category->first()->name }}</option>
                                  @foreach ($categories as $category)
                                    @if ($category->id != $post->category->first()->id)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>  
                                    @endif
                                  @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                          <div class="mb-3">
                              <label class='form-label'>عکس مطلب</label>
                              <input name="url" type="file" class="form-control">
                            </div>
                
                        </div>
                    </div>

                  <div class="mb-3">
                      <label class="form-label" for="productdesc">توضیحات مطلب</label>
                      <textarea name="description" class="form-control" id="productdesc" rows="4">{!! $post->description !!}</textarea>
                  </div>
                  <div class="row mb-4">
                    <div class="col text-end">
                      <a href="{{ route('post.index') }}" class="btn btn-danger"> <i class="uil uil-times me-1"></i> انصراف </a>
                      <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt me-1"></i> ویرایش </button>
                    
                    </div> <!-- end col -->
                    </div> <!-- end row-->
              </form>
          </div>
      </div>
  </div>
</div>
</div>
</div>
  </div> <!-- content -->
</div>

    
@endsection