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
                        <h1 class="text-center">هیچ مطلبی وجود ندارد <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i></a></h1> 
                    @else 
                    <div class="col-md-2">
                        <h4 class="card-title"><a href="{{ route('post.create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i></a> جدول مطالب</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="search" class="form-control" placeholder="جستجو عنوان ..." />  
                            </div>
                            <button type="button" onclick="searchHandler()" class="btn btn-primary form-control">
                                <i class="fa fa-search"></i>
                            </button>
                         
                        </div>
                    </div>
                    <div class="col-md-5">
                        @include('messages')
                        <div id="multiDestroyMessage" class="alert alert-danger text-center"  style="display: none"> مشکلی پیش آمد! دوباره تلاش کنید</div>
                    </div>
                    
                    <div class="col-md-2 mb-3">
                            <button type="button" onclick="deleteAllSelector()" id="deleteAllSelectorBtn" class="btn btn-danger" disabled>حذف انتخاب شده ها</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th class="text-center align-middle"><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">عنوان</th>
                                    <th class="text-center align-middle">عکس</th>
                                    <th class="text-center align-middle">تاریخ ایجاد <i class="fa fa-history btn btn-info" onclick="changeDateHandler()"></i></th>
                                    <th class="text-center align-middle">تاریخ بروزرسانی</th>
                                    <th class="text-center align-middle">مشاهده</th>
                                    <th class="text-center align-middle">ویرایش</th>
                                    <th class="text-center align-middle">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="{{ $post->id == session('post_id') ? 'alert-success' : '' }}">
                                        <td class="text-center align-middle"><input type="checkbox" name="checkBox[]" value="{{ $post->id }}" onclick="checkBoxHandler({{ $post->id }})" ></th>
                                        <th scope="row" class="text-center align-middle">{{ $post->id }}</th>
                                        <td class="text-center align-middle">{{ Str::limit($post->title,30) }}</td>
                                        <td class="text-center align-middle"><a href="{{ route('post.show',$post->id) }}"><img width="70px" src="{{ $post->image ? '/' . $post->image->url : 'storage/images/laravel.jfif' }}" alt=""></a></td>
                                        <td class="text-center align-middle">
                                            <div class="currentDate" style="display: none">
                                                {{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') }}
                                            </div>
                                            <div class="diffForHumans">
                                                {{ $post->created_at->diffForHumans() }}
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="currentDate" style="display:none;">
                                                {{ \Morilog\Jalali\Jalalian::fromCarbon($post->updated_at)->format('Y/m/d') }}
                                            </div>
                                            <div class="diffForHumans">
                                                {{ $post->updated_at->diffForHumans() }}
                                            </div>
                                        </td>
                                        <td class="text-center align-middle"><a href="{{ route('post.show',$post->id) }}" target="_blank" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                                        <td class="text-center align-middle"><a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                        <td class="text-center align-middle"><form action="{{ route('post.destroy',$post->id) }}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></form></td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                    
                    {{ $posts->links() }}
                   
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
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        let ids = [];
        let value;
        let search;
        let basicData = false;

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
                                url: '/post/multidestroy',
                                type: 'POST',
                                data: {ids},
                                success:function(res) {
                                    location.reload();
                                },
                                error:function(e) {
                                    document.getElementById('multiDestroyMessage').style.display = 'block';
                               
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
                    window.location.href = `http://laravel.test/post?search=${search}&value=${value}`;
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
                    window.location.href = `http://laravel.test/post?search=${search}&value=${value}`;
                },error:function(e){
                    document.getElementById('multiDestroyMessage').style.display = 'block';

                },
            });
        }

        const changeDateHandler = () => {
            basicData = !basicData;
           let diffForHumans =  document.getElementsByClassName('diffForHumans');
           let currentDate =  document.getElementsByClassName('currentDate');
           
            for(let i = 0;i < diffForHumans.length;i++) {
                if(basicData) {
                    diffForHumans[i].style.display = 'none';
                    currentDate[i].style.display = 'block';
                } else {
                    diffForHumans[i].style.display = 'block';
                    currentDate[i].style.display = 'none';
                }
            
            }
           
           
        }

        
    </script>
    
@endsection