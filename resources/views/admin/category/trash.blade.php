@extends('layouts.backend.main')


@section('content')

<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body row">    
                    @if ($categories->count() == 0)
                        <h1 class="text-center">زباله دان دسته بندی خالیست <a href="{{ route('category.index') }}" class="btn btn-primary">بازگشت به صفحه دسته بندی</a></h1>
                    @else
                    <div class="col-md-4">
                        <br>
                        <h4 class="card-title">زباله دان دسته بندی ها</h4>
                        
                    </div>
                    <div class="col-md-4">
                        <div id="multiDestroyMessage" class="alert alert-danger text-center"  style="display: none">خطا! دوباره تلاش کنید</div>
                        @include('messages')
                    </div>
                    <div class="col-md-4">
                        <button id="multiRestoreBtn" onclick="multiRestore()" class="btn btn-warning mb-3" disabled>بازگردانی انتخاب شده ها</button>
                        <button id="multiDestroyBtn" onclick="multiDestroy()" class="btn btn-danger mb-3" disabled>حذف انتخاب شده ها</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-danger table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th class="text-center align-middle"><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">عنوان</th>
                                    <th class="text-center align-middle">تاریخ حذف</th>
                                    <th class="text-center align-middle">بازگردانی</th>
                                    <th class="text-center align-middle">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="{{ $category->id == session('category_id') ? 'alert-success' : '' }}">
                                        <th class="text-center align-middle"><input type="checkbox" value="{{ $category->id }}" name="checkBox[]" onclick="checkBoxHandler({{ $category->id }})" ></th>
                                        <th scope="row" class="text-center align-middle">{{ $category->id }}</th>
                                        <td class="text-center align-middle">
                                            @if (!$category->parent_id)
                                            <i class="fas fa-star"></i>
                                            @endif
                                            {{ $category->name }}
                                        </td>
                                        <td class="text-center align-middle">{{ $category->deleted_at->diffForHumans() }}</td>
                                        <td class="text-center align-middle"><a href="{{ route('category.restore',$category->id) }}"><button type="button" class="btn btn-warning">بازگردانی</button></a></td>
                                        <td class="text-center align-middle"> <form action="{{ route('category.trashDelete',$category->id) }}" method="POST"> @csrf @method("DELETE") <button class="btn btn-danger">حذف</button> </form></td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                 @endif
                </div>
            </div>
        </div>    
    </div>
    </div>
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
                document.getElementById('multiDestroyBtn').disabled = false;
                document.getElementById('multiRestoreBtn').disabled = false;
            } else { 
                document.getElementById('multiDestroyBtn').disabled = true;
                document.getElementById('multiRestoreBtn').disabled = true;
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
                document.getElementById('multiDestroyBtn').disabled = false;
                document.getElementById('multiRestoreBtn').disabled = false;
            } else { 
                document.getElementById('multiDestroyBtn').disabled = true;
                document.getElementById('multiRestoreBtn').disabled = true;
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
                    title: 'بعد از حذف شما قادر به بازگرداندن نیستید!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#808080',
                    confirmButtonText: 'حذف موارد انتخاب شده',
                    cancelButtonText: 'انصراف',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/category/multitrashdelete',
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

            const multiRestore = () => {
            
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                if(ids.length > 0) 
                {
                    Swal.fire({
                    title: 'بازگردانی موارد انتخاب شده!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#cd9941',
                    cancelButtonColor: '#808080',
                    confirmButtonText: 'بازگردانی کن!',
                    cancelButtonText: 'انصراف',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/category/multirestore',
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