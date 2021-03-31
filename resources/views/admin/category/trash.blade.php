@extends('layouts.backend.main')


@section('content')

<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
        @if ($categories->count() == 0)
            <h1>زباله دان دسته بندی خالیست <a href="{{ route('category.index') }}">بازگشت به صفحه دسته بندی</a></h1>
        @else
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body row">    
                    <div class="col-md-4">
                        <br>
                        <h4 class="card-title">زباله دان دسته بندی ها</h4>
                        
                    </div>
                    <div class="col-md-4">
                        <div id="multiDeleteMessage" class="alert alert-danger text-center"  style="display: none">خطا! دوباره تلاش کنید</div>
                        @include('messages')
                    </div>
                    <div class="col-md-4">
                        <button id="restoreAllSelectorBtn" onclick="restoreAllSelector()" class="btn btn-warning mb-3" disabled>بازگردانی انتخاب شده ها</button>
                        <button id="deleteAllSelectorBtn" onclick="deleteAllSelector()" class="btn btn-danger mb-3" disabled>حذف انتخاب شده ها</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-danger table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>تاریخ حذف</th>
                                    <th>بازگردانی</th>
                                    <th>حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="{{ $category->id == session('category_id') ? 'alert-success' : '' }}">
                                        <th><input type="checkbox" value="{{ $category->id }}" name="checkBox[]" onclick="checkBoxHandler({{ $category->id }})" ></th>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->deleted_at->diffForHumans() }}</td>
                                        <td><button type="button" class="btn btn-warning" onclick="editCategory({{ $category->id }},{{ json_encode($category->name) }})">بازگردانی</button></td>
                                        <td> <form action="{{ route('category.destroy',$category->id) }}" method="POST"> @csrf @method("DELETE") <button class="btn btn-danger">حذف</button> </form></td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endif

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
                document.getElementById('deleteAllSelectorBtn').disabled = false;
                document.getElementById('restoreAllSelectorBtn').disabled = false;
            } else { 
                document.getElementById('deleteAllSelectorBtn').disabled = true;
                document.getElementById('restoreAllSelectorBtn').disabled = true;
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
                document.getElementById('restoreAllSelectorBtn').disabled = false;
            } else { 
                document.getElementById('deleteAllSelectorBtn').disabled = true;
                document.getElementById('restoreAllSelectorBtn').disabled = true;
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