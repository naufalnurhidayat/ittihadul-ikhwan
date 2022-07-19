@extends('layout.admin')

@section('title', 'Akun')

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row mt-3">
    <div class="col">
        <h3>Akun</h3>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <a href="/admin/registrasi" class="btn btn-primary">Tambah Admin</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card shadow">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5 class="text-center card-title">{{ auth()->user()->name }}</h5>
                </li>
                <li class="list-group-item">
                    <h6>Email: </h6>{{ auth()->user()->email }}
                </li>
                <li class="list-group-item">
                    <h6>Nomor Telepon: </h6>{{ auth()->user()->nomor_telpon }}
                </li>
                <li class="list-group-item">
                    <h6>Role: </h6>{{ auth()->user()->role }}
                </li>
                <li class="list-group-item text-center">
                    <a href="/admin/akun/ubah" class="btn btn-primary">Ubah Data Akun</a>
                    <a href="/admin" class="btn btn-success">Kembali</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection