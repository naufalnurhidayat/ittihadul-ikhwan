@extends('layout.admin')

@section('title', 'Ubah Data Akun')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h3>Ubah Data Akun</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <form action="/admin/akun/ubah" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required>
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ auth()->user()->nomor_telepon }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ auth()->user()->role }}" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
            <a href="/admin/akun" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</div>

@endsection