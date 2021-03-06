@extends('layouts.induk')

@section('css_vendor')
<link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('script')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#table-users').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.datatables') !!}',
            columns: [
                { data: 'user.id', name: 'user.id' },
                { data: 'user.name', name: 'user.name' },
                { data: 'user.username', name: 'user.username' },
                { data: 'user.email', name: 'user.email' },
                { data: 'user.role', name: 'user.role' },
                { data: 'jawatan', name: 'jawatan' },
                { data: 'gred', name: 'gred' },
                { data: 'city.nama', name: 'city.nama' },
                { data: 'user.status', name: 'user.status' },
                { data: 'action', name: 'action', orderable:false, searchable:false }
            ],
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
        });
    });
</script>
@endsection

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
         
        <div class="table-responsive">
        <table class="table table-bordered" id="table-users">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                    <th>JAWATAN</th>
                    <th>GRED</th>
                    <th>CITY</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
        </table>
        </div>

    </div>
    <div class="card-footer">
        <a href="{{ route('home') }}" class="btn btn-dark">HOME</a>
    </div>
</div>

@endsection
