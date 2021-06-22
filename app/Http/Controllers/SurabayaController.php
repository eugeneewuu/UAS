<?php

namespace App\Http\Controllers;

use App\Models\Surabaya;
use Illuminate\Http\Request;

class SurabayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $surabaya = Surabaya::all();

        $title = "Data Penduduk Surabaya";
        return view('admin.surabaya', compact('title', 'surabaya'));

        if ($request->has('cari')) {
            $surabaya = Surabaya::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $surabaya = Surabaya::all();
        }

        return view('admin.surabaya', ['surabaya' => $surabaya]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Masukkan Data Penduduk Surabaya";
        return view('admin.surabayacreate', compact('title'));
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
            'nik' => 'required|unique:surabayas|max:10',
            'alamat' => 'required'
        ], $message);
        Surabaya::create($validasi);
        return redirect('surabaya')->with('success', 'Data Berhasil Tersimpan!');
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
        $surabaya = Surabaya::find($id);
        $title = "Edit Data Anda";
        return view('admin.surabayacreate', compact('title', 'surabaya'));
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
            'nik' => 'required|unique:surabayas|max:10',
            'alamat' => 'required'
        ], $message);
        Surabaya::where('id', $id)->update($validasi);
        return redirect('surabaya')->with('success', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Surabaya::where('id', $id)->delete();
        return redirect('surabaya')->with('success', 'Data Berhasil Di Hapus!');
    }
    public function cari(Request $request)
    {

        $cari = $request->search;

        $surabaya = Surabaya::where('nama', 'like', '%' . $cari . '%')->get();
        return view('admin.surabaya', ['surabaya' => $surabaya]);
    }
}