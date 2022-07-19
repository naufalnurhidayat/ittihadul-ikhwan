@extends('layout.admin')

@section('title', 'Detail Laporan')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Detail Data Laporan</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card shadow">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h6>Pemasukan: </h6>{{ $laporan->pemasukan }}
                </li>
                <li class="list-group-item">
                    <h6>Pengeluaran: </h6>{{ $laporan->pengeluaran }}
                </li>
                <li class="list-group-item">
                    <h6>Jenis: </h6>{{ $laporan->jenis }}
                </li>
                <li class="list-group-item">
                    <h6>Tanggal: </h6>{{ $laporan->tanggal }}
                </li>
                <li class="list-group-item text-center">
                    <a href="/admin/laporan/ubah/{{ $laporan->id }}" class="btn btn-primary">Ubah Data Laporan</a>
                    <a href="/admin/laporan" class="btn btn-success">Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection