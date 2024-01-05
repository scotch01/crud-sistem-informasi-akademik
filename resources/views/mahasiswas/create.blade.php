@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Tambah Data</h1>
    <hr />
    <form action="{{ route('mahasiswas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
            </div>
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="NIM">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="angkatan" placeholder="Angkatan"></input>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection