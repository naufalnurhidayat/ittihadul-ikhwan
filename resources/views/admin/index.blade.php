@extends('layout.admin')

@section('title', 'Beranda')

@section('content')
<div class="jumbotron mt-3">
    <h1 class="display-4">Selamat datang, Admin!</h1>
    <p class="lead">Halaman ini digunakan untuk admin website Masjid Ittihadul Ikhwan.</p>
    <hr class="my-4">
    <p>Silahkan isi kegiatan, laporan, dan yang lainnya.</p>
    <a class="btn btn-primary btn-lg" href="/admin/laporan" role="button">Tambahkan Laporan</a>
</div>
@endsection