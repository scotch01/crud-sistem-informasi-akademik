<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = Matkul::orderBy('created_at', 'DESC')->get();

        return view ('matkul.index', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dospengs = Dosen::all();
        return view ('matkul.create', compact('dospengs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matkul::create($request->all());

        return redirect()->route('matkul')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $matkul = Matkul::findorFail($id);

        return view ('matkul.show', compact('matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = Matkul::findorFail($id);
        $dospengs = Dosen::all();

        return view ('matkul.edit', compact('matkul','dospengs'));
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
        $matkul = Matkul::findorFail($id);

        $matkul-> update($request->all());

        return redirect()->route('matkul')->with('success', 'data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = Matkul::findorFail($id);

        $matkul->delete();

        return redirect()->route('matkul')->with('success', ' data berhasil dihapus');
    }
}