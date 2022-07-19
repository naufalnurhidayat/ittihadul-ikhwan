@extends('layout.admin')

@section('title', 'Tambah Lainnya')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Tambah Daftar Lainnya</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="/admin/lainnya/tambah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" required class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            <a href="/admin/lainnya" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</div>

@endsection