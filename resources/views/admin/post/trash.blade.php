@extends('layouts.backend.main')


@section('content')


<div class="page-content">
    <!-- Start content -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                   
                    @if ($posts->count() == 0)
                        <h1 class="text-center">زباله دان مطالب خالیست! <a href="{{ route('post.index') }}" class="btn btn-primary">بازگشت به صفحه مطالب</a></h1> 
                    @else 
                    <div class="col-md-4">
                        <h4 class="card-title"> زباله دان مطالب <a href="{{ route('post.index') }}" class="btn btn-primary">بازگشت به صفحه مطالب</a></h4>
                    </div>
                    <div class="col-md-4">
                        @include('messages')
                        <div id="multiDestroyMessage" class="alert alert-danger text-center"  style="display: none"> مشکلی پیش آمد! دوباره تلاش کنید</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <button type="button" class="btn btn-warning" onclick="multiRestore()" id="multiRestoreBtn" disabled>بازگردانی انتخاب شده ها</button>
                        <button type="button" onclick="multiDestroy()" id="multiDestroyBtn" class="btn btn-danger" disabled>حذف انتخاب شده ها</button>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover table-danger table-bordered border-primary mb-0">

                            <thead>
                                <tr>
                                    <th class="text-center align-middle"><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()"></th>
                                    <th class="text-center align-middle">#</th>
                                    <th class="text-center align-middle">عنوان</th>
                                    <th class="text-center align-middle">عکس</th>
                                    <th class="text-center align-middle">محتوا</th>
                                    <th class="text-center align-middle">تاریخ حذف <i class="fas fa-history btn btn-info" onclick="changeDateHandler()"></i></th>
                                    <th class="text-center align-middle">بازگردانی</th>
                                    <th class="text-center align-middle">حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="{{ $post->id == session('post_id') ? 'alert-success' : '' }}">
                                        <td class="text-center align-middle"><input type="checkbox" name="checkBox[]" value="{{ $post->id }}" onclick="checkBoxHandler({{ $post->id }})" ></th>
                                        <th scope="row" class="text-center align-middle">{{ $post->id }}</th>
                                        <td class="text-center align-middle">{{ Str::limit($post->title,13) }}</td>
                                        <td class="text-center align-middle"><img width="70px" src="{{ $post->image ? '/' . $post->image->url : '/storage/images/laravel.jfif' }}" alt=""></td>
                                        
                                        <td class="text-center align-middle">{!! Str::limit($post->description,50) !!}</td> 
                                        <td class="text-center align-middle">
                                            <div class="currentDate" style="display: none">
                                            {{ \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') }}
                                            
                                            </div>
                                            <div class="diffForHumans">
                                                {{ $post->deleted_at->diffForHumans() }}
                                            </div>
                                        </td>
                                        
                                        <td class="text-center align-middle"><a href="{{ route('post.restore',$post->id) }}" class="btn btn-warning"><i class="fas fa-trash-restore"></i></a></td>
                                        <td class="text-center align-middle"><form action="{{ route('post.trashDelete',$post->id) }}" method="POST"> @csrf @method("DELETE") <button type="submit" class="btn btn-danger"><i class="fas fa-truck-loading"></i></button></form></td>
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
        let basicData = false;
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
                                url: '/post/multitrashdelete',
                                type: 'POST',
                                data: {ids},
                                success:function(res) {
                                    location.reload();  
                                },
                                error:function(e) {
                                    document.getElementById('multiDestroyMessage').style.display = 'block';
                                    console.log(e);
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
                                url: '/post/multirestore',
                                type: 'POST',
                                data: {ids},
                                success:function(res) {
                                    location.reload();  
                                },
                                error:function(e) {
                                    document.getElementById('multiDestroyMessage').style.display = 'block';
                                    console.log(e);
                                }
                            });
                        }
                    });
                   
                }
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