<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilais = Nilai::orderBy('id', 'DESC')->get();

        return view ('nilai.index', compact('nilais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nilais = Nilai::all();
        $mhs = Mahasiswa::all();
        $matkuls = Matkul::all();
        $dosens = Dosen::all();
        return view ('nilai.create', compact('nilais','mhs','matkuls','dosens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Nilai::create($request->all());

        return redirect()->route('nilai')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $nilai = Nilai::findorFail($id);

        return view ('nilai.show', compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilais = Nilai::findorFail($id);
        $mhs = Mahasiswa::all();
        $matkuls = Matkul::all();
        $dosens = Dosen::all();

        return view ('nilai.edit', compact('nilais','mhs','matkuls','dosens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nilai = Nilai::findorFail($id);

        $nilai-> update($request->all());

        return redirect()->route('nilai')->with('success', 'data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::findorFail($id);

        $nilai->delete();

        return redirect()->route('nilai')->with('success', ' data berhasil dihapus');
    }
}