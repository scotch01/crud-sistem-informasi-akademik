@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
<hr />
    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->nama }}" ></input>
            </div>
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $mahasiswa->nim }}" ></input>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $mahasiswa->jurusan }}"></input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Angkatan</label>
                <input class="form-control" name="angkatan" placeholder="Description" value="{{ $mahasiswa->angkatan }}"></input>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection