@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        Borang Login
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
            <form method="POST" action="{{ url('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember_me">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>
</div>

@endsection


@section('script')
<script>
    alert('Sila masukkan email dan password')
</script>
@endsection
