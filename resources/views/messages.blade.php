@if (session()->has('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
        {{-- <a href="{{ route(session('restoreUrl'),session('restore_id')) }}"><button class="btn btn-warning">Restore !</button></a> --}}
    </div>
    
@endif


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center">
            {{ $error }}
        </div>
    @endforeach
@endif