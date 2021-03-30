@extends('layouts.backend.main')


@section('content')

<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
        <div class="row">

        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-4">
                        <br>
                        <h4 class="card-title">جدول دسته بندی ها</h4>
                        
                    </div>
                    <div class="col-md-8">
                        <button id="deleteAllSelectorBtn" onclick="deleteAllSelector()" class="btn btn-danger mb-3 float-end" style="display: none">حذف انتخاب شده ها</button>
                        <div id="multiDeleteMessage" class="alert alert-danger"  style="display: none">خطا! دوباره تلاش کنید</div>

                        @include('messages')
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>تاریخ ایجاد</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="{{ $category->id == session('category_id') ? 'alert-success' : '' }}">
                                        <th><input type="checkbox" value="{{ $category->id }}" name="checkBox[]" onclick="checkBoxHandler({{ $category->id }})" ></th>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                        <td><button type="button" class="btn btn-primary" onclick="editCategory({{ $category->id }},{{ json_encode($category->name) }})">ویرایش</button></td>
                                        <td> <form action="{{ route('category.destroy',$category->id) }}" method="POST"> @csrf @method("DELETE") <button class="btn btn-danger">حذف</button> </form></td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title">ایجاد دسته بندی</h4>
                    <div class="table-responsive">
                        <form action="{{ route('category.store') }}" method="POST" class="d-flex">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">ایجاد</button>
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
                            <button type="submit" class="btn btn-primary">ویرایش</button>
                        </form>
                    </div>
                </div>
            </div>
        `;
         $('#form-edit-category div').remove();           
        $('#form-edit-category').append(editForm);
    }

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
                document.getElementById('deleteAllSelectorBtn').style.display = 'block';
            } else { 
                document.getElementById('deleteAllSelectorBtn').style.display = 'none';
            }
        }

        const deleteAllSelector = () => {
            
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                if(ids.length > 0) 
                {

                    $.ajax({
                        url: '/category/multidelete',
                        type: 'POST',
                        data: {ids},
                        success:function(res) {
                            location.reload();
                        },
                        error:function(e) {
                            
                            document.getElementById('multiDeleteMessage').style.display = 'flex';
                        }
                    });
                }
            }
  </script>
@endsection