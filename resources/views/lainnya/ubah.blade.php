@extends('layout.admin')

@section('title', 'Ubah Lainnya')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Ubah Data Lainnya</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="/admin/lainnya/ubah/{{ $utility->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $utility->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" required class="form-control">{{ $utility->keterangan }}</textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('storage/' . $utility->foto ) }}" alt="{{ $utility->judul }}" class="card-img-top" style="width: 8rem;">
                    </div>
                    <div class="col-md align-self-center">
                        <input type="file" class="form-control" id="foto" name="foto" value="{{ $utility->foto }}">
                        <input type="hidden" name="foto_lama" value="{{ $utility->foto }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
            <a href="/admin/lainnya" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</div>

@endsection