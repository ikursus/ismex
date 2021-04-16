@extends('layouts.induk')

@section('isi_kandungan')
<div class="card">
    <div class="card-header">
        Senarai Users
    </div>
    <div class="card-body">

        @include('layouts.alerts')

        <p>
            <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
        </p>
            
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>PERKARA</th>
                    <th>DETAIL</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

        </table>

    </div>
    <div class="card-footer">
        <a href="{{ route('home') }}" class="btn btn-dark">HOME</a>
    </div>
</div>
@endsection