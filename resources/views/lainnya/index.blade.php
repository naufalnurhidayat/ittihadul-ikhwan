@extends('layout.admin')

@section('title', 'Lainnya')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mt-3">
        <div class="col">
            <h3>Daftar Lainnya</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="{{ url('/admin/lainnya/tambah') }}" class="btn btn-primary">Tambah Lainnya</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utilities as $utility)
                    <tr>
                        <td><img src="{{ asset('storage/' . $utility->foto) }}" alt="{{ $utility->judul }}" style="width: 8rem;"></td>
                        <td>{{ $utility->judul }}</td>
                        <td>{{ $utility->keterangan }}</td>
                        <td>
                            <a href="{{ url('/admin/lainnya/ubah/' . $utility->id) }}" class="badge bg-success">Edit</a>
                            <a href="{{ url('/admin/lainnya/detail/' . $utility->id) }}" class="badge bg-primary">Detail</a>
                            <form action="{{ url('/admin/lainnya/hapus/' . $utility->id) }}" class="d-inline" method="POST">
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