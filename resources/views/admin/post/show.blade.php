@extends('layouts.backend.main')


@section('content')
<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
            <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">جزئیات مطلب #{{ $post->id }}</h4>

<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
        <li class="breadcrumb-item active">Product Detail</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
<div class="row">
<div class="col-lg-12">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-5">
                <div class="product-detail">
                    <div class="row">
                        <div class="col-9">
                            <div class="tab-content position-relative" id="v-pills-tabContent">
                                <div class="product-wishlist">
                                    <a href="#">
                                        <i class="mdi mdi-heart-outline"></i>
                                    </a>
                                </div>
                                <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                    <div class="product-img">
                                        <img src="{{ $post->image ? $post->image->url : '/storage/images/laravel.jfif' }}" alt="Image Post" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row text-center mt-2">
                                <div class="col-sm-6 d-grid">
                                    <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary btn-block waves-effect waves-light mt-2 me-1">
                                        <i class="uil uil-shopping-cart-alt me-2"></i> ویرایش
                                    </a>
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <a href="{{ route('post.destroy',$post->id) }}" class="btn btn-danger btn-block waves-effect  mt-2 waves-light">
                                        <i class="uil uil-shopping-basket me-2"></i>حذف
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="mt-4 mt-xl-3 ps-xl-4">
                    <h5 class="font-size-14"><a href="#" class="text-muted">{{ $post->category->first()->name }}</a></h5>
                    <h4 class="font-size-20 mb-3">{{ $post->title }}</h4>

                    <div class="text-muted">
                        <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span>
                        234 Reviews
                    </div>

                    <h5 class="mt-4 pt-2"> نویسنده <span class="text-danger font-size-14 ms-2">admin</span></h5>

                    <p class="mt-4 text-muted">{!! $post->description !!}</p>

                    
                </div>
            </div>
        </div>
        <!-- end row -->

      

        <div class="mt-4">
            <h5 class="font-size-14 mb-3">Reviews : </h5>
            <div class="text-muted mb-3">
                <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234
                Reviews
            </div>
            <div class="border p-4 rounded">
                <div class="border-bottom pb-3">
                    <p class="float-sm-end text-muted font-size-13">12 July, 2020</p>
                    <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.1</div>
                    <p class="text-muted mb-4">It will be as simple as in fact, it will be Occidental. It will
                        seem like simplified</p>
                    <div class="d-flex align-items-start">
                        <div class="flex-1">
                            <h5 class="font-size-15 mb-0">Samuel</h5>
                        </div>

                        <ul class="list-inline product-review-link mb-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="uil uil-thumbs-up"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="uil uil-comment-alt-message"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="border-bottom py-3">
                    <p class="float-sm-end text-muted font-size-13">06 July, 2020</p>
                    <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.0</div>
                    <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit</p>
                    <div class="d-flex align-items-start">
                        <div class="flex-1">
                            <h5 class="font-size-15 mb-0">Joseph</h5>
                        </div>

                        <ul class="list-inline product-review-link mb-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="uil uil-thumbs-up"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="uil uil-comment-alt-message"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="border-bottom py-3">
                    <p class="float-sm-end text-muted font-size-13">26 June, 2020</p>
                    <div class="badge bg-success mb-2"><i class="mdi mdi-star"></i> 4.2</div>
                    <p class="text-muted mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                    </p>
                    <div class="d-flex align-items-start">
                        <div class="flex-1">
                            <h5 class="font-size-15 mb-0">Paul</h5>
                        </div>

                        <ul class="list-inline product-review-link mb-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="uil uil-thumbs-up"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="uil uil-comment-alt-message"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- end row -->

    </div> <!-- content -->
</div>
@endsection