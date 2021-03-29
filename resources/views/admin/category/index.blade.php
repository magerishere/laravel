@extends('layouts.backend.main')


@section('content')

<div class="container category">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center">Categories</h1>
            <hr>
            @include('messages')
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="{{ $category->id === session('category_id') ? 'alert-success' : '' }}"> {{-- Change background new category create to green --}}
                        <td> {{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td><button class="btn btn-primary" onclick="editCategory({{ $category->id }},{{ json_encode($category->name) }})">Edit</button></td>
                        <td>
                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">
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
        <div class="col-md-4 form-create-category">
            <div class="col-md-10">
                <form action="{{ route('category.store') }}" method="POST" class="d-flex">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name Category...">
                    </div>
                    <span><button type="submit" class="btn btn-primary">Create</button></span>
                </form>
            </div>
            <div class="col-md-10 form-edit-category">
               {{-- When click edit, display form edit with Jquery --}}
            </div>
        </div>
    </div>
</div>
    
@endsection


@section('footer')
<script>
    const editCategory = (id,name) => {
        
        const editForm = `<form action="/category/${id}" method="POST" class="d-flex" >
                    @csrf @method('PATCH')
                    <div class="form-group"> 
                    <input type="text" name="name" value="${name}" class="form-control"> 
                    </div>
                    <span>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </span> 
                    </form>`;
         $('.form-edit-category form').remove();           
        $('.form-edit-category').append(editForm);
    }
  </script>
@endsection