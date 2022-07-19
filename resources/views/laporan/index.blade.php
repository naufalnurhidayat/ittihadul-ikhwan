@extends('layout.admin')

@section('title', 'Laporan')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mt-3">
        <div class="col">
            <h3>Daftar Laporan</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="{{ url('/admin/laporan/tambah') }}" class="btn btn-primary">Tambah Laporan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Pengeluaran</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan as $l)
                    <tr>
                        <td>{{ $l->pemasukan }}</td>
                        <td>{{ $l->pengeluaran }}</td>
                        <td>{{ $l->jenis }}</td>
                        <td>{{ $l->tanggal }}</td>
                        <td>
                            <a href="{{ url('/admin/laporan/ubah/' . $l->id) }}" class="badge bg-success">Edit</a>
                            <a href="{{ url('/admin/laporan/detail/' . $l->id) }}" class="badge bg-primary">Detail</a>
                            <form action="{{ url('/admin/laporan/hapus/' . $l->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection