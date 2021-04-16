@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('mesej-berjaya'))
<div class="alert alert-success">
    {{ session('mesej-berjaya') }}
</div>
@endif

@if(session('mesej-gagal'))
<div class="alert alert-danger">
    {{ session('mesej-gagal') }}
</div>
@endif