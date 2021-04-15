@extends('layouts.induk')

@section('isi_kandungan')

<p>Ada sebarang pertanyaan? Sila isikan borang dibawah:</p>

<div class="card">
    <div class="card-header">
        Borang Hubungi
    </div>
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
            <form method="POST" action="{{ route('hubungi.post') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>
</div>

@endsection
