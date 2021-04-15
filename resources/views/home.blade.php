@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        <div class="text-center">
            Selamat Datang {{ auth()->user()->name }}
        </div>
    </div>
    <div class="card-body">

        @include('layouts.alerts')

        <p>Hello {{ auth()->user()->name }}!</p>
        <p>Selamat datang ke aplikasi ISMEX!</p>

    </div>
    <div class="card-footer">
            
        <form method="POST" action="{{ url('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>

    </div>
</div>

@endsection