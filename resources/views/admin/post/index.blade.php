@extends('layouts.backend.main')


@section('content')

<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
            <!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">Products</h4>


<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
        <li class="breadcrumb-item active">Products</li>
    </ol>
</div>

</div>
</div>
</div>
<!-- end page title -->
<div class="row">
<div class="col-xl-3 col-lg-4">
<div class="card">
    <div class="card-header bg-transparent border-bottom">
        <h5 class="mb-0">Filters</h5>
    </div>

    <div class="p-4">
        <h5 class="font-size-14 mb-3">Categories</h5>
        <div class="custom-accordion">
            <a class="text-body fw-semibold pb-2 d-block" data-bs-toggle="collapse" href="#categories-collapse" role="button" aria-expanded="false" aria-controls="categories-collapse">
                <i class="mdi mdi-chevron-up accor-down-icon text-primary me-1"></i> Footwear
            </a>
            <div class="collapse show" id="categories-collapse">
                <div class="card p-2 border shadow-none">
                    <ul class="list-unstyled categories-list mb-0">
                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Formal Shoes</a></li>
                        <li class="active"><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Sports
                                Shoes</a></li>
                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> casual Shoes</a></li>
                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Sandals</a></li>
                        <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> Slippers</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="p-4 border-top">
        <div>
            <h5 class="font-size-14 mb-4">Price</h5>

            <span class="irs irs--round js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: visible;">$0</span><span class="irs-max" style="visibility: hidden;">$1 000</span><span class="irs-from" style="visibility: visible; left: 12.8755%;">$200</span><span class="irs-to" style="visibility: visible; left: 71.3111%;">$800</span><span class="irs-single" style="visibility: hidden; left: 33.365%;">$200 — $800</span></span><span class="irs-grid" style="width: 97.3927%; left: 1.20364%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -2.73968%;">0</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -5.60837%;">250</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -5.60837%;">500</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -5.60837%;">750</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -7.61134%;">1 000</span></span><span class="irs-bar" style="left: 20.7822%; width: 58.4356%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 19.4785%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 77.9142%;"><i></i><i></i><i></i></span></span><input type="text" id="pricerange" class="irs-hidden-input" tabindex="-1" readonly="">
        </div>
    </div>

    <div class="custom-accordion">
        <div class="p-4 border-top">
            <div>
                <h5 class="font-size-14 mb-0"><a href="#filtersizes-collapse" class="text-dark d-block" data-bs-toggle="collapse">Sizes <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                <div class="collapse show" id="filtersizes-collapse">
                    <div class="mt-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-1">
                                <h5 class="font-size-15 mb-0">Select Sizes</h5>
                            </div>
                            <div class="w-xs">
                                <select class="form-select">
                                    <option value="1">3</option>
                                    <option value="2">4</option>
                                    <option value="3">5</option>
                                    <option value="4">6</option>
                                    <option value="5" selected="">7</option>
                                    <option value="6">8</option>
                                    <option value="7">9</option>
                                    <option value="8">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="p-4 border-top">
            <div>
                <h5 class="font-size-14 mb-0"><a href="#filterprodductcolor-collapse" class="text-dark d-block" data-bs-toggle="collapse">Colors <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                <div class="collapse show" id="filterprodductcolor-collapse">
                    <div class="mt-4">
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck1">
                            <label class="form-check-label" for="productcolorCheck1"><i class="mdi mdi-circle text-dark mx-1"></i> Black</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck2">
                            <label class="form-check-label" for="productcolorCheck2"><i class="mdi mdi-circle text-light mx-1"></i> White</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck3">
                            <label class="form-check-label" for="productcolorCheck3"><i class="mdi mdi-circle text-secondary mx-1"></i> Gray</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck4">
                            <label class="form-check-label" for="productcolorCheck4"><i class="mdi mdi-circle text-primary mx-1"></i> Blue</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck5">
                            <label class="form-check-label" for="productcolorCheck5"><i class="mdi mdi-circle text-success mx-1"></i> green</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck6">
                            <label class="form-check-label" for="productcolorCheck6"><i class="mdi mdi-circle text-danger mx-1"></i> Red</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck7">
                            <label class="form-check-label" for="productcolorCheck7"><i class="mdi mdi-circle text-warning mx-1"></i> Yellow</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="productcolorCheck8">
                            <label class="form-check-label" for="productcolorCheck8"><i class="mdi mdi-circle text-purple mx-1"></i> Purple</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="p-4 border-top">
            <div>
                <h5 class="font-size-14 mb-0"><a href="#filterproduct-color-collapse" class="text-dark d-block" data-bs-toggle="collapse">Customer Rating <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                <div class="collapse show" id="filterproduct-color-collapse">
                    <div class="mt-4">
                        <div class="form-check mt-2">
                            <input type="radio" id="productratingRadio1" name="productratingRadio1" class="form-check-input">
                            <label class="form-check-label" for="productratingRadio1">4 <i class="mdi mdi-star text-warning"></i> &amp; Above</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="radio" id="productratingRadio2" name="productratingRadio1" class="form-check-input">
                            <label class="form-check-label" for="productratingRadio2">3 <i class="mdi mdi-star text-warning"></i> &amp; Above</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="radio" id="productratingRadio3" name="productratingRadio1" class="form-check-input">
                            <label class="form-check-label" for="productratingRadio3">2 <i class="mdi mdi-star text-warning"></i> &amp; Above</label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="radio" id="productratingRadio4" name="productratingRadio1" class="form-check-input">
                            <label class="form-check-label" for="productratingRadio4">1 <i class="mdi mdi-star text-warning"></i></label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="p-4 border-top">
            <div>
                <h5 class="font-size-14 mb-0"><a href="#filterproduct-discount-collapse" class="collapsed text-dark d-block" data-bs-toggle="collapse">Discount <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>

                <div class="collapse" id="filterproduct-discount-collapse">
                    <div class="mt-4">
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="productdiscountRadio1" name="productdiscountRadio" class="custom-control-input">
                            <label class="custom-control-label" for="productdiscountRadio1">50% or more</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="productdiscountRadio2" name="productdiscountRadio" class="custom-control-input">
                            <label class="custom-control-label" for="productdiscountRadio2">40% or more</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="productdiscountRadio3" name="productdiscountRadio" class="custom-control-input">
                            <label class="custom-control-label" for="productdiscountRadio3">30% or more</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="productdiscountRadio4" name="productdiscountRadio" class="custom-control-input">
                            <label class="custom-control-label" for="productdiscountRadio4">20% or more</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="productdiscountRadio5" name="productdiscountRadio" class="custom-control-input">
                            <label class="custom-control-label" for="productdiscountRadio5">10% or more</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" id="productdiscountRadio6" name="productdiscountRadio" class="custom-control-input">
                            <label class="custom-control-label" for="productdiscountRadio6">Less than
                                10%</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
</div>

<div class="col-xl-9 col-lg-8">
<div class="card">
    <div class="card-body">
        <div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h5>Showing result for "Shoes"</h5>
                        <ol class="breadcrumb p-0 bg-transparent mb-2">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Footwear</a></li>
                            <li class="breadcrumb-item active">Shoes</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-inline float-md-end">
                        <div class="search-box ml-2">
                            <div class="position-relative">
                                <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                <li class="nav-item">
                    <a class="nav-link disabled fw-medium" href="#" tabindex="-1" aria-disabled="true">Sort
                        by:</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Popularity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Newest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Discount</a>
                </li>

            </ul>

            <div class="row">
                @foreach ($posts as $post)

                <div class="col-xl-4 col-sm-6">
                    <div class="product-box">
                        <div class="product-img pt-4 px-4">
                            <div class="product-ribbon badge bg-warning">
                                {{ $post->category->first()->name }}
                            </div>
                            <div class="product-wishlist">
                                <a href="#">
                                    <i class="mdi mdi-heart-outline"></i>
                                </a>
                            </div>
                            
                            <img src="{{ $post->image ? $post->image->url : "storage/images/laravel.jfif" }}" alt="Image Product" class="img-fluid mx-auto d-block">
                        </div>

                        <div class="text-center product-content p-4">

                            <h5 class="mb-1"><a href="#" class="text-dark">{{ $post->title }}</a></h5>
                            <p class="text-muted font-size-13">{{  Str::limit($post->description,40) }}</p>

                            <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$280</del></span> $260</h5>

                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
            <!-- end row -->

            <div class="row mt-4">
                <div class="col-sm-6">
                    <div>
                        <p class="mb-sm-0">Page 2 of 84</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-end">
                        <ul class="pagination pagination-rounded mb-sm-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
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

@section('footer')
    <script>
        let ids = [];
        const checkBoxHandler = (id) => {
            const index = ids.indexOf(String(id));
            if(index > -1) {
                ids.splice(index,1);
            } else {
                ids.push(String(id));
            }
            if(ids.length > 0) {
                document.getElementById('deleteAllSelectorBtn').disabled = false;
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
            } else { 
                document.getElementById('deleteAllSelectorBtn').disabled = true;
            }
        }

        const deleteAllSelector = () => {
            const token = document.getElementsByName('_token')[0].value;

            $.ajax({
                url: '/post/multidelete',
                type: 'POST',
                data: {ids,_token:token},
                success:function(res) {
                   document.getElementById('multiDeleteMessage').style.display = 'block';
                },
                error:function(e) {
                    console.log('error');
                }
            });
        }
        
        
    </script>
    
@endsection