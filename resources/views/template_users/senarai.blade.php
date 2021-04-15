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
                    <th>ID</th>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                @foreach( $senarai_users as $user )
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>  
                    <td>{{ $user->status }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">EDIT</a>
                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
    <div class="card-footer">
        <a href="{{ route('home') }}" class="btn btn-dark">HOME</a>
    </div>
</div>

@endsection
