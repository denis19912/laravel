@if(session()->has('error-message'))
    <div class="alert alert-danged alert-dismissible fade show" role="alert">
            {{ session('error-message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
