@extends('layouts.backend.main')


@section('content')

<div class="container">
    <div class="col-md-9  mx-auto">
        <h1 class="text-center">Posts <span><a href="{{ route('post.create') }}">+</a></span> </h1>
        <form action="{{ route('post.multiDelete') }}" method="POST">
            @csrf
            <input type="hidden" id="ids" name="ids" value=''>
            <button type="button" class="btn btn-danger" id="deleteAllSelectorBtn" onclick="deleteAllSelector()" disabled>Delete All Selected</button>
        </form>
        <hr>
        @include('messages')
        <div class="alert alert-danger d-none" id="multiDeleteMessage">
            All post selected has been removed
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><input type="checkbox" id="checkBoxAll" onclick="checkBoxAll()" ></th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Edit</th>
                    <th>Delete</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="{{ $post->id === session('post_id') ? 'alert-success' : '' }}"> {{-- Change background new post create to green --}}
                    <td><input type="checkbox" value="{{ $post->id }}"  name="checkBox[]" onclick="checkBoxHandler({{ $post->id }})"></td>
                    <td> {{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td><img width="100px" src="{{ $post->image ? $post->image->url : 'storage/images/laravel.jfif' }}" alt="Image Post"></td>
                    <td>{{ Str::limit($post->description,50) }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td><a href="{{ route('post.edit',$post->id) }}"><button class="btn btn-primary">Edit</button></a></td>
                    <td>
                        <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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