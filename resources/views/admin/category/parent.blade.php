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
                           
                                <h5 class="text-center">برای دسته بندی <strong class="text-danger">{{ $category->name }} </strong> زیر مجموعه وجود ندارد</h5>
                    
                        </div>
                    @else
                        
                    <div class="col-md-5">
                      
                        <h4 class="card-title text-">جدول زیرمجموعه <strong class="text-danger"> {{ $category->name }} </strong></h4>
                        
                    </div>
                    <div class="col-md-7">
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
                                    <th class="text-center align-middle">ویرایش</th>
                                    <th class="text-center align-middle">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $child)
                                    <tr class="{{ $child->id == session('category_id') ? 'alert-success' : '' }}">
                                        <th><input type="checkbox" value="{{ $child->id }}" name="checkBox[]" onclick="checkBoxHandler({{ $child->id }})" ></th>
                                        <th scope="row" class="text-center align-middle">{{ $child->id }}</th>
                                        <td class="text-center align-middle">{{ $child->name }}</td>
                                        <td class="text-center align-middle">{{ $child->created_at->diffForHumans() }}</td>
                                        <td class="text-center align-middle"><button type="button" class="btn btn-primary" onclick="editCategory({{ $child->id }},{{ json_encode($child->name) }},{{ $category->id }})"><i class="fas fa-edit"></i></button></td>
                                        <td class="text-center align-middle"> <form action="{{ route('category.destroy',$child->id) }}" method="POST"> @csrf @method("DELETE") <button class="btn btn-danger"><i class="fas fa-trash"></i></button> </form></td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title">ایجاد زیرمجموعه</h4>
                    <div class="table-responsive">
                        <form action="{{ route('category.store') }}" method="POST" class="d-flex">
                            @csrf
                            <input type="hidden" name="parent_id" id="parent_id" value="{{ $category->id }}">
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
    const editCategory = (id,name,parentId) => {
       
        const editForm = `
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ویرایش دسته بندی</h4>
                    <div class="table-responsive">
                        <form action="{{   URL('/category/${id}')  }}" method="POST" class="d-flex">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="parent_id" value=${parentId}  >
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

      
  </script>
@endsection