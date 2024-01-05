@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Tambah Data</h1>
    <hr />
    <form action="{{ route('dosens.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Dosen">
            </div>
            <div class="col">
                <input type="text" name="nip" class="form-control" placeholder="NIP">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="bidang" class="form-control" placeholder="Bidang">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection