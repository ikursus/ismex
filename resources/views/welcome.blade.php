@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        Welcome Page
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        
    </div>
</div>

@endsection