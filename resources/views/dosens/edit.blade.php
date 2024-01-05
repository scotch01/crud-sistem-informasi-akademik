@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
<hr />
    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $dosen->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" placeholder="Nip" value="{{ $dosen->nip }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bidang</label>
                <input type="text" name="bidang" class="form-control" placeholder="Bidang" value="{{ $dosen->bidang }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection