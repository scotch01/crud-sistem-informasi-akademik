@extends('layouts.app')

@section('title')
  
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Matakuliah</label>
            <input type="text" class="form-control"value="{{ $matkul->kode_matkul }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Matakuliah</label>
            <input type="text" class="form-control" value="{{ $matkul->nama_matkul }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">SKS</label>
            <input type="text" class="form-control" value="{{ $matkul->sks }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Dosen Pengampu</label>
            <input type="text" class="form-control" value="{{ $matkul->nama_dosen }}" readonly>
        </div>
    </div>
@endsection