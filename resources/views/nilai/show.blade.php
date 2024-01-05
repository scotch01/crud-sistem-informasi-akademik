@extends('layouts.app')

@section('title')
  
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control"value="{{ $nilai->nama_mhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" value="{{ $nilai->nim_mhs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" value="{{ $nilai->matkul }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dosem Pengampu</label>
            <input type="text" class="form-control" value="{{ $nilai->nama_dosen }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nilai</label>
            <input type="text" class="form-control" value="{{ $nilai->nilai }}" readonly>
        </div>
    </div>
@endsection