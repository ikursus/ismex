@extends('layouts.induk')

@section('isi_kandungan')

<div class="card">
    <div class="card-header">
        Edit Profile {{ $profile->user->name }}
    </div>
    <div class="card-body">

        @include('layouts.alerts')
            
            {!! Form::model($profile, ['method' => 'PATCH', 'route' => ['profiles.update', $profile->id]]) !!}
                
                <div class="mb-3">
                    <label for="name" class="form-label">Jawatan</label>
                    {!! Form::text('jawatan', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="mb-3">
                    <label for="gred" class="form-label">Gred</label>
                    {!! Form::text('gred', null, ['class' => 'form-control']) !!}
                </div>

                <div class="mb-3">
                    <label for="jantina" class="form-label">Jantina</label>
                    {!! Form::select('jantina', ['lelaki' => 'LELAKI', 'perempuan' => 'PEREMPUAN'], null, ['class' => 'form-control']) !!}
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
                    {!! Form::select('city_id', $cities, null, ['class' => 'form-control']) !!}
                </div>
                <a href="{{ route('profiles.show', $profile->user->id) }}" class="btn btn-dark">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>

            {!! Form::close() !!}


    </div>
</div>

@endsection
