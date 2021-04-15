@extends('layouts.induk')

@section('isi_kandungan')

{{ $field }}

<br>

{!! $field !!}

@endsection

@foreach($numbers as $item)
    @section('script')

    SCRIPT_1 = {{ $item['id'] }}

    @endsection
@endforeach

@foreach($numbers as $item)
    @push('script2')

    SCRIPT_2 = {{ $item['id'] }}

    @endpush
@endforeach