@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Nilai</h1>
        <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Mata Kuliah</th>
                <th>Dosen Pengampu</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($nilais->count() > 0)
                @foreach($nilais as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_mhs }}</td>
                        <td class="align-middle">{{ $rs->nim_mhs }}</td>
                        <td class="align-middle">{{ $rs->matkul }}</td>
                        <td class="align-middle">{{ $rs->nama_dosen }}</td>
                        <td class="align-middle">{{ $rs->nilai }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('nilai.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('nilai.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('nilai.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Matakuliah tidak ada</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection