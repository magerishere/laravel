@extends('layouts.backend.main')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-7 mx-auto">
          <h1 class="mt-5 text-center">Edit Post</h1>
          <hr>
          
            <form action="{{ route('post.update',$post->id) }}" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                  <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Title..." autofocus >
                </div>
                <div class="mb-3">
                  <input type="file" name="url" class="form-control">
                </div>
                <div class="mb-3">
                  <select name="name" class="form-select">
                    <option value="{{ $post->category->first()->id }}">{{ $post->category->first()->name }}</option>
                    @foreach ($categories as $category)
                        @if ($category->id !== $post->category->first()->id)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>  
                        @endif
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                 <textarea name="description" cols="30" rows="10" class="form-control"  placeholder="Description...">{{ $post->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
              </form>
              @include('messages')
        </div>
       
     
    </div>
  </div>

    
@endsection