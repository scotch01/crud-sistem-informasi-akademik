@extends('layouts.app')

@section('title')
  
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->nama }}" readonly></input>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $mahasiswa->nim }}" readonly></input>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $mahasiswa->jurusan }}" readonly></input>
        </div>
        <div class="col mb-3">
            <label class="form-label">Angkatan</label>
            <input class="form-control" name="angkatan" placeholder="Asal" value="{{ $mahasiswa->angkatan }}"readonly></input>
        </div>
    </div>
@endsection