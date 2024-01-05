@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
<hr />
    <form action="{{ route('nilai.update', $nilais->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <select name="nama_mhs" class="form-select mb-3" aria-label="Default select example" >
                    @foreach ($mhs as $mh)
                    <option value="{{ $mh->nama }}" {{ $nilais->nama_mhs == $mh->nama ? 'selected' : '' }}>
                    {{ $mh->nama }}
                </option>
                    @endforeach 
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <select name="nim_mhs" class="form-select mb-3" aria-label="Default select example" >
                    @foreach ($mhs as $mh)
                    <option value="{{ $mh->nim }}" {{ $nilais->nim_mhs == $mh->nim ? 'selected' : '' }}>
                    {{ $mh->nim }}
                </option>
                    @endforeach 
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Mata Kuliah</label>
                <select name="matkul" class="form-select mb-3" aria-label="Default select example" >
                    @foreach ($matkuls as $matkul)
                    <option value="{{ $matkul->nama_matkul }}" {{ $nilais->matkul == $matkul->nama_matkul ? 'selected' : '' }}>
                    {{ $matkul->nama_matkul }}
                </option>
                    @endforeach 
                </select>
            </div>
            <div class="col mb-3">
            <label class="form-label">Dosen Pengampu</label>
            <select name="nama_dosen" class="form-select mb-3" aria-label="Default select example" >
                @foreach ($dosens as $dosen)
                <option value="{{ $dosen->nama }}" {{ $nilais->nama_dosen == $dosen->nama ? 'selected' : '' }}>
                {{ $dosen->nama }}
            </option>
                @endforeach 
            </select>
            </div>
        </div>
            <div class="row">
                <div class="d-grid col-4">
                    <input type="text" name="nilai" class="form-control text-black" placeholder="Input NILAI" value="{{$nilais->nilai}}">
                </div>
            </div>
        <div class="row mt-4">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

@endsection