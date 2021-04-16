@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        Edit Profile {{ $profile->user->name }}
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
            <form method="POST" action="{{ route('profiles.update', $profile->id) }}">
                @csrf
                @method('PATCH')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Jawatan</label>
                    <input type="text" class="form-control" name="jawatan" value="{{ $profile->jawatan }}">
                </div>
                
                <div class="mb-3">
                    <label for="gred" class="form-label">Gred</label>
                    <input type="text" class="form-control" name="gred" value="{{ $profile->gred }}">
                </div>

                <div class="mb-3">
                    <label for="jantina" class="form-label">Jantina</label>
                    <select name="jantina" class="form-control">
                        <option value="">-- Pilih Jantina --</option>
                        <option value="lelaki" {{ $profile->jantina == 'lelaki' ? 'selected="selected"' : null }}>LELAKI</option>
                        <option value="perempuan" {{ $profile->jantina == 'perempuan' ? 'selected="selected"' : null }}>PEREMPUAN</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="text" class="form-control" name="telefon" value="{{ $profile->telefon }}">
                </div>
                
                <div class="mb-3">
                    <label for="taraf_perkahwinan" class="form-label">Taraf Perkahwinan</label>
                    <select class="form-control" name="taraf_perkahwinan">
                        <option value="">-- Pilih Taraf --</option>
                        <option value="berkahwin" {{ $profile->taraf_perkahwinan == 'berkahwin' ? 'selected="selected"' : null }}>Berkahwin</option>
                        <option value="bujang" {{ $profile->taraf_perkahwinan == 'bujang' ? 'selected="selected"' : null }}>Bujang</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="city_id" class="form-label">Bandar</label>
                    <select class="form-control" name="city_id">
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ $profile->city_id == $city->id ? 'selected="selected"' : null }}>{{ $city->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('profiles.show', $profile->user->id) }}" class="btn btn-dark">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

    </div>
</div>

@endsection
