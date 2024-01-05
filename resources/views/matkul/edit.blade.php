@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
<hr />
    <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode Matakuliah</label>
                <input type="text" name="kode_matkul" class="form-control" value="{{ $matkul->kode_matkul }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">SKS</label>
                <input type="text" name="sks" class="form-control" value="{{ $matkul->sks }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input type="text" name="nama_matkul" class="form-control" value="{{ $matkul->nama_matkul }}" >
            </div>
        </div>
        <label class="form-label">Dosen Pengampu</label>
        <select name="dospeng" class="form-select mb-3" aria-label="Default select example" >
            @foreach ($dospengs as $dospeng)
            <option value="{{ $dospeng->nama }}" {{ $matkul->dospeng == $dospeng->nama ? 'selected' : '' }}>
            {{ $dospeng->nama }}
        </option>
            @endforeach 
        </select>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection