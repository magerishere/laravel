@extends('layouts.backend.main')


@section('content')

<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
        <div class="row">

        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body row">
                    @if ($categories->count() == 0 && !session('restoreUrl'))
                        <div class="col-md-12">
                            <br>
                            <h1 class="text-center">دسته بندی وجود ندارد</h1>
                        </div>
                    @else
                        
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="search" class="form-control" placeholder="جستجو عنوان ..." />  
                            </div>
                            <button type="button" onclick="searchHandler()" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                         
                        </div>
                        <br>
                        <h4 class="card-title">جدول دسته بندی ها</h4>
                        
                    </div>
                    <div class="col-md-6">
                        <button id="multiDestroyBtn" onclick="multiDestroy()" class="btn btn-danger mb-3 float-end" style="display: none">حذف انتخاب شده ها</button>
                        <div id="multiDestroyMessage" class="alert alert-danger"  style="display: none">خطا! دوباره تلاش کنید</div>

                        @include('messages')
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">عنوان</th>
                                    <th class="text-center align-middle">تاریخ ایجاد</th>
                                    <th class="text-center align-middle">مشاهده</th>
                                    <th class="text-center align-middle">ویرایش</th>
                                    <th class="text-center align-middle">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="{{ $category->id == session('category_id') ? 'alert-success' : '' }}">
                                        <th><input type="checkbox" value="{{ $category->id }}" name="checkBox[]" onclick="checkBoxHandler({{ $category->id }})" ></th>
                                        <th scope="row" class="text-center align-middle">{{ $category->id }}</th>
                                        <td class="text-center align-middle"><i class="fas fa-star"></i>{{ $category->name }}</td>
                                        <td class="text-center align-middle">{{ $category->created_at->diffForHumans() }}</td>
                                        <td class="text-center align-middle"><a href="{{ route('category.show',$category->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                        <td class="text-center align-middle"><button type="button" class="btn btn-primary" onclick="editCategory({{ $category->id }},{{ json_encode($category->name) }})"><i class="fas fa-edit"></i></button></td>
                                        <td class="text-center align-middle"> <form action="{{ route('category.destroy',$category->id) }}" method="POST"> @csrf @method("DELETE") <button class="btn btn-danger"><i class="fas fa-trash"></i></button> </form></td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title">ایجاد دسته بندی اصلی</h4>
                    <div class="table-responsive">
                        <form action="{{ route('category.store') }}" method="POST" class="d-flex">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" autofocus>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square"></i></button>
                        </form>
                    </div>

                </div>
            </div>
            <br>
            <div id="form-edit-category"></div>
        </div>
      
    </div>
    </div>
</div>
@endsection


@section('footer')
<script>
    
    let ids = [];
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    let value;
    let search;

    const editCategory = (id,name) => {
       
        const editForm = `
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ویرایش دسته بندی</h4>
                    <div class="table-responsive">
                        <form action="{{   URL('/category/${id}')  }}" method="POST" class="d-flex">
                            @csrf
                            @method('PATCH')
                            <div class="form-group col-md-6">
                                <input type="text" name="name" value=${name} class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        `;
         $('#form-edit-category div').remove();           
        $('#form-edit-category').append(editForm);
    }

        const checkBoxHandler = (id) => {
            const index = ids.indexOf(String(id));
            if(index > -1) {
                ids.splice(index,1);
            } else {
                ids.push(String(id));
            }
            if(ids.length > 0) {
                document.getElementById('multiDestroyBtn').style.display = 'block';
            } else { 
                document.getElementById('multiDestroyBtn').style.display = 'none';
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
                document.getElementById('multiDestroyBtn').style.display = 'block';
            } else { 
                document.getElementById('multiDestroyBtn').style.display = 'none';
            }
        }

        const multiDestroy = () => {
            
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
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
                                url: '/category/multidestroy',
                                type: 'POST',
                                data: {ids},
                                success:function(res) {
                                    location.reload();
                                },
                                error:function(e) {
                                    
                                    document.getElementById('multiDestroyMessage').style.display = 'flex';
                                }
                            });
                        }
                    });
                }
            }

            const numberOfPerPageHandler = () => {
            value = document.getElementById('numberOfPerPage').value;
            search = urlParams.get('search') ? urlParams.get('search') : '';
            $.ajax({
                url:'/post',
                type:'get',
 
                success:function(res){
                    window.location.href = `http://laravel.test/category?search=${search}&value=${value}`;
                },error:function(e){
                    document.getElementById('multiDestroyMessage').style.display = 'block';

                },
            });
        }

        const searchHandler = () => {
            search = document.getElementById('search').value;
            value = urlParams.get('value') ? urlParams.get('value') : 10;
            $.ajax({
                url:'/post',
                type:'get',
                success:function(res) {
                    window.location.href = `http://laravel.test/category?search=${search}&value=${value}`;
                },error:function(e){
                    document.getElementById('multiDestroyMessage').style.display = 'block';

                }

            })
   
         
        }
  </script>
@endsection