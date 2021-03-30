@extends('layouts.backend.main')


@section('content')


<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                   
                    @if ($posts->count() == 0 && !session()->has('restoreUrl') && !session()->has('restoresUrl'))
                        <h1 class="text-center">زباله دان خالی است! <a href="{{ route('post.index') }}" class="btn btn-primary">بازگشت</a></h1> 
                    @else 
                    <div class="col-md-3">
                        <h4 class="card-title">جدول زباله دان مطالب  <a href="{{ route('post.index') }}" class="btn btn-primary">بازگشت</a></h4>
                    </div>
                    <div class="col-md-7">
                        @include('messages')
                        <div id="multiDeleteMessage" class="alert alert-danger text-center"  style="display: none"> مشکلی پیش آمد! دوباره تلاش کنید</div>
                    </div>
                    <div class="col-md-2 mb-3">
                            <button type="button" onclick="deleteAllSelector()" id="deleteAllSelectorBtn" class="btn btn-danger" disabled>حذف انتخاب شده ها</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-danger table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th class="text-center">#</th>
                                    <th class="text-center">عنوان</th>
                                    <th class="text-center">عکس</th>
                                    <th class="text-center">محتوا</th>
                                    <th class="text-center">تاریخ حذف</th>
                                    <th class="text-center">بازگردانی</th>
                                    <th class="text-center">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="{{ $post->id == session('post_id') ? 'alert-success' : '' }}">
                                        <td class="align-middle"><input type="checkbox" name="checkBox[]" value="{{ $post->id }}" onclick="checkBoxHandler({{ $post->id }})" ></th>
                                        <th scope="row" class="align-middle">{{ $post->id }}</th>
                                        <td class="align-middle">{{ Str::limit($post->title,13) }}</td>
                                        <td class="align-middle"><a href="{{ route('post.show',$post->id) }}"><img width="70px" src="{{ $post->image ? $post->image->url : '/storage/images/laravel.jfif' }}" alt=""></a></td>
                                        
                                        <td class="align-middle">{!! Str::limit($post->description,50) !!}</td> 
                                        <td class="align-middle">{{ $post->deleted_at ? $post->deleted_at->diffForHumans() : '' }}</td>
                                        
                                        <td class="align-middle"><a href="{{ route('post.edit',$post->id) }}" class="btn btn-warning">بازگردانی</a></td>
                                        <td class="align-middle"><form action="{{ route('post.trashDelete',$post->id) }}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-danger">حذف</button></form></td>
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
            
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                if(ids.length > 0) 
                {

                    $.ajax({
                        url: '/post/multidelete',
                        type: 'POST',
                        data: {ids},
                        success:function(res) {
                            // location.reload();
                            console.log(res);
                        },
                        error:function(e) {
                            document.getElementById('multiDeleteMessage').style.display = 'block';
                            console.log(e);
                        }
                    });
                }
            }
        
        
    </script>
    
@endsection