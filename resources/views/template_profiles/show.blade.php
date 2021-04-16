@extends('layouts.induk')

@section('isi_kandungan')
<div class="card">
    <div class="card-header">
        Profile {{ $profile->user->name }}
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
                    <td>{{ $profile->user->name }}</td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td>{{ $profile->user->username }}</td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td>{{ $profile->user->email }}</td>
                </tr>
                <tr>
                    <td>STATUS AKAUN</td>
                    <td>{{ $profile->user->status }}</td>
                </tr>
                <tr>
                    <td>ROLE</td>
                    <td>{{ ucwords($profile->role) }}</td>
                </tr>
                <tr>
                    <td>JANTINA</td>
                    <td>{{ $profile->jantina }}</td>
                </tr>
                <tr>
                    <td>JAWATAN</td>
                    <td>{{ $profile->jawatan }}</td>
                </tr>
                <tr>
                    <td>GRED</td>
                    <td>{{ $profile->gred }}</td>
                </tr>
                
                <tr>
                    <td>TARAF PERKAHWINAN</td>
                    <td>{{ $profile->taraf_perkahwinan }}</td>
                </tr>
                <tr>
                    <td>TELEFON</td>
                    <td>{{ $profile->telefon }}</td>
                </tr>
                
                <tr>
                    <td>BANDAR</td>
                    <td>{{ $profile->city->nama }}</td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td>{{ $profile->alamat }}</td>
                </tr>
            </tbody>

        </table>

    </div>
    <div class="card-footer">
        <a href="{{ route('users.index') }}" class="btn btn-dark">KEMBALI</a>
        <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary">EDIT PROFILE</a>
    </div>
</div>
@endsection