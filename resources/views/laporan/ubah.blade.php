@extends('layout.admin')

@section('title', 'Ubah Laporan')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Ubah Data Laporan</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="{{ url('/admin/laporan/ubah/' . $laporan->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="pemasukan" class="form-label">Pemasukan</label>
                <input type="number" class="form-control" id="pemasukan" name="pemasukan" value="{{ $laporan->pemasukan }}" required>
            </div>
            <div class="mb-3">
                <label for="pengeluaran" class="form-label">Pengeluaran</label>
                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ $laporan->pengeluaran }}" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $laporan->tanggal }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $laporan->jenis }}" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
            <a href="{{ url('/admin/laporan') }}" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</div>

@endsection