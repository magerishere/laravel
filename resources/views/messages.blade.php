@if (session()->has('message'))
    <div class="alert alert-success text-center">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
        {{-- Start restore link for single delete --}}
        @if (session()->has('restoreUrl'))
            <a href="{{ route(session('restoreUrl'),session('restore_id')) }}">
                <button class="btn btn-warning">بازگردانی!</button>
            </a> 
        @endif
        {{-- End restore link for single delete --}}
    </div>
@endif


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center m-2">
             {{ $error }}
             
        </div>
    @endforeach
@endif