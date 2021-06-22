<?php

namespace App\Http\Controllers;

use App\Models\Bali;
use Illuminate\Http\Request;

class BaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bali = Bali::all();

        $title = "Data Penduduk Bali";
        return view('admin.bali', compact('title', 'bali'));

        if ($request->has('cari')) {
            $bali = Bali::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $bali = Bali::all();
        }

        return view('admin.bali', ['bali' => $bali]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Masukkan Data Penduduk Bali";
        return view('admin.balicreate', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Kolom : Attribute Harus Lengkap',
            'date' => 'Kolom : Attribute Harus Lengkap',
            'numeric' => 'Kolom : Attribute Harus Lengkap'
        ];
        $validasi = $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:balis|max:10',
            'alamat' => 'required'
        ], $message);
        Bali::create($validasi);
        return redirect('bali')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bali = Bali::find($id);
        $title = "Edit Data Anda";
        return view('admin.balicreate', compact('title', 'bali'));
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
        $message = [
            'required' => 'Kolom : Attribute Harus Lengkap',
            'date' => 'Kolom : Attribute Harus Lengkap',
            'numeric' => 'Kolom : Attribute Harus Lengkap'
        ];
        $validasi = $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:balis|max:10',
            'alamat' => 'required'
        ], $message);
        Bali::where('id', $id)->update($validasi);
        return redirect('bali')->with('success', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bali::where('id', $id)->delete();
        return redirect('bali')->with('success', 'Data Berhasil Di Hapus!');
    }
    public function cari(Request $request)
    {

        $cari = $request->search;

        $bali = Bali::where('nama', 'like', '%' . $cari . '%')->get();
        return view('admin.bali', ['bali' => $bali]);
    }
}