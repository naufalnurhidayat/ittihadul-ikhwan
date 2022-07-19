@extends('layout.admin')

@section('title', 'Detail Lainnya')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Detail Data Lainnya</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card shadow">
            <img src="{{ asset('storage/' . $utility->foto ) }}" alt="{{ $utility->nama }}" class="card-img-top mx-auto p-3" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5 class="text-center card-title">{{ $utility->judul }}</h5>
                </li>
                <li class="list-group-item">
                    {{ $utility->keterangan }}
                </li>
                <li class="list-group-item text-center">
                    <a href="/admin/lainnya/ubah/{{ $utility->id }}" class="btn btn-primary">Ubah Data Lainnya</a>
                    <a href="/admin/lainnya" class="btn btn-success">Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection