@extends('layouts.induk')

@section('isi_kandungan')
<div class="card">
    <div class="card-header">
        Profile {{ $user->name }}
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>PERKARA</th>
                    <th>DETAIL</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>NAMA</td>
                    <td></td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td></td>
                </tr>
                <tr>
                    <td>STATUS AKAUN</td>
                    <td></td>
                </tr>
                <tr>
                    <td>ROLE</td>
                    <td></td>
                </tr>
                <tr>
                    <td>JANTINA</td>
                    <td></td>
                </tr>
                <tr>
                    <td>JAWATAN</td>
                    <td></td>
                </tr>
                <tr>
                    <td>GRED</td>
                    <td></td>
                </tr>
                
                <tr>
                    <td>TARAF PERKAHWINAN</td>
                    <td></td>
                </tr>
                <tr>
                    <td>TELEFON</td>
                    <td></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td></td>
                </tr>
            </tbody>

        </table>

    </div>
    <div class="card-footer">
        <a href="{{ route('users.index') }}" class="btn btn-dark">KEMBALI</a>
    </div>
</div>
@endsection