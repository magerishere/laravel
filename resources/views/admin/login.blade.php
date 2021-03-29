@extends('layouts.frontend.main')

@section('content')

<div class="container mt-5">
    <div class="col-md-5 mx-auto">
        <h2 class="text-center mb-3"> <strong>Login</strong> </h2>
        
        <hr>
        @include('messages')
        <form method="POST">
            @csrf
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Username..." autofocus required >
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password..." required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
    </div> 
</div>
   


@endsection

