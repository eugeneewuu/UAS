<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Surabaya;


class DashboardSurabayaController extends Controller
{
    public function __construct()
    {

        $this->Surabaya = new Surabaya();
    }

    public function index()
    {
        $surabaya = Surabaya::all();
        return view('dashboardsurabaya', ['surabaya' => $surabaya]);
    }
}