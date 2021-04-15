@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        Tambah User
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                
                <div class="mb-3">
                    <label for="mykad" class="form-label">MyKAD</label>
                    <input type="text" class="form-control" name="mykad" value="{{ old('mykad') }}">
                </div>
                
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" name="role">
                        <option value="">-- Pilih Role --</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="role" class="form-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="pending">Pending</option>
                        <option value="active">Active</option>
                    </select>
                </div>
                <a href="{{ route('users.index') }}" class="btn btn-dark">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

    </div>
</div>

@endsection
