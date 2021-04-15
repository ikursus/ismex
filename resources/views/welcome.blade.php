@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        <div class="text-center">Selamat Datang Ke Aplikasi ISMEX</div>
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
        <div class="d-grid">
            <a href="{{ route('login') }}" class="btn btn-primary btn-block">Login</a>
        <div class="d-grid">

    </div>
</div>

@endsection