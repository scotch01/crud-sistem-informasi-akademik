@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Tambah Data</h1>
    <hr />
    <form action="{{ route('matkul.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_matkul" class="form-control" placeholder="Kode Mata Kuliah">
            </div>
            <div class="col">
                <input type="text" name="sks" class="form-control" placeholder="SKS">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_matkul" class="form-control" placeholder="Mata Kuliah">
            </div>
        </div>

        <select name="nama_dosen" style="color: rgba(0, 0, 0, 0.6)" class="form-select mb-3" aria-label="Default select example" aria-placeholder="Dosen Pengampu" >
            <option selected hidden >Dosen Pengampu</option>
            @foreach ($dospengs as $dospeng)
            <option value="{{$dospeng -> nama}}">{{$dospeng -> nama}}</option>
            @endforeach 
        </select>
        <div class="row">
        <div class="d-grid col-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
@endsection