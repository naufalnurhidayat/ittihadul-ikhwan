@extends('layout.admin')

@section('title', 'Detail Kegiatan')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Detail Data Kegiatan</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card shadow">
            <img src="{{ asset('storage/' . $kegiatan->foto ) }}" alt="{{ $kegiatan->nama }}" class="card-img-top mx-auto p-3" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5 class="text-center card-title">{{ $kegiatan->judul }}</h5>
                </li>
                <li class="list-group-item">
                    {{ $kegiatan->keterangan }}
                </li>
                <li class="list-group-item text-center">
                    <a href="{{ url('/admin/agenda/ubah/' . $kegiatan->id) }}" class="btn btn-primary">Ubah Data Kegiatan</a>
                    <a href="{{ url('/admin/agenda') }}" class="btn btn-success">Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection