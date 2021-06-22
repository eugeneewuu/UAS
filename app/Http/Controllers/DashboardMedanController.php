<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class DashboardMedanController extends Controller
{
    public function __construct()
    {

        $this->Mahasiswa = new Mahasiswa();
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('dashboardmedan', ['mahasiswa' => $mahasiswa]);
    }
}