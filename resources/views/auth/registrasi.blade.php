@extends('layout.admin')

@section('title', 'Registrasi')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Registrasi</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="{{ url('/admin/registrasi') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="nomor_telpon" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="nomor_telpon" name="nomor_telpon" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            <a href="{{ url('/admin') }}" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</div>

@endsection