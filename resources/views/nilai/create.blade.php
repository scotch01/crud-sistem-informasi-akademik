@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Tambah Data</h1>
    <hr />
    <form action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
        <select name="nama_mhs" style="color: rgba(0, 0, 0, 0.6)" class="form-select mb-3" aria-label="Default select example" aria-placeholder="Nama Mahasiswa" >
            <option selected hidden >Nama Mahasiswa</option>
            @foreach ($mhs as $mh)
            <option value="{{$mh -> nama}}">{{$mh -> nama}}</option>
            @endforeach 
        </select>
            </div>
            <div class="col">
        <select name="nim_mhs" style="color: rgba(0, 0, 0, 0.6)" class="form-select mb-3" aria-label="Default select example" aria-placeholder="NIM Mahasiswa" >
            <option selected hidden >NIM Mahasiswa</option>
            @foreach ($mhs as $mh)
            <option value="{{$mh -> nim}}">{{$mh -> nim}}</option>
            @endforeach 
        </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
        <select name="matkul" style="color: rgba(0, 0, 0, 0.6)" class="form-select mb-3" aria-label="Default select example" aria-placeholder="Mata Kuliah" >
            <option selected hidden >Mata Kuliah</option>
            @foreach ($matkuls as $matkul)
            <option value="{{$matkul -> nama_matkul}}">{{$matkul -> nama_matkul}}</option>
            @endforeach 
        </select>
            </div>
            <div class="col">
        <select name="nama_dosen" style="color: rgba(0, 0, 0, 0.6)" class="form-select mb-3" aria-label="Default select example" aria-placeholder="Nama Dosen" >
            <option selected hidden >Nama Dosen</option>
            @foreach ($dosens as $dosen)
            <option value="{{$dosen -> nama}}">{{$dosen -> nama}}</option>
            @endforeach 
        </select>
            </div>
            <div class="row">
                <div class="d-grid col-4">
                    <input type="text" name="nilai" class="form-control" placeholder="Input NILAI">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="d-grid col-3">  
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
@endsection