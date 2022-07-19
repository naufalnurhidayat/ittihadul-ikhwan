@extends('layout.admin')

@section('title', 'Kegiatan')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mt-3">
        <div class="col">
            <h3>Daftar Kegiatan</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <a href="{{ url('/admin/agenda/tambah') }}" class="btn btn-primary">Tambah Agenda</a>
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
                    @foreach($agenda as $a)
                    <tr>
                        <td><img src="{{ asset('storage/' . $a->foto) }}" alt="{{ $a->judul }}" style="width: 8rem;"></td>
                        <td>{{ $a->judul }}</td>
                        <td>{{ $a->keterangan }}</td>
                        <td>
                            <a href="{{ url('/admin/agenda/ubah/' . $a->id) }}" class="badge bg-success">Edit</a>
                            <a href="{{ url('/admin/agenda/detail/' . $a->id) }}" class="badge bg-primary">Detail</a>
                            <form action="{{ url('/admin/agenda/hapus/' . $a->id) }}" class="d-inline" method="POST">
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