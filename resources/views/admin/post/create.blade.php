@extends('layouts.backend.main')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-7 mx-auto">
          <h1 class="mt-5 text-center">Create Post</h1>
          <hr>
          
            <form action="{{ route('post.store') }}" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title..." autofocus >
                </div>
                <div class="mb-3">
                  <input type="file" name="url" class="form-control">
                </div>
                <div class="mb-3">
                  <select name="name" class="form-select">
                    <option value="">Select One Category...</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>  
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                 <textarea name="description"  value="{{ old('description') }}" cols="30" rows="10" class="form-control"  placeholder="Description..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
              </form>
              @include('messages')
        </div>
       
     
    </div>
  </div>

    
@endsection