@extends('layouts.app')

@section('title')
  
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $dosen->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control" placeholder="NIP" value="{{ $dosen->nip }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Bidang</label>
            <input type="text" name="bidang" class="form-control" placeholder="Bidang" value="{{ $dosen->bidang }}" readonly>
        </div>
    </div>
@endsection