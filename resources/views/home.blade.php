@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        Home Page
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
        <form method="POST" action="{{ url('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
</div>

@endsection