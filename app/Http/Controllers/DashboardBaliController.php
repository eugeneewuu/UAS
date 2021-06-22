<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Bali;


class DashboardBaliController extends Controller
{
    public function __construct()
    {

        $this->Bali = new Bali();
    }

    public function index()
    {
        $bali = Bali::all();
        return view('dashboardbali', ['bali' => $bali]);
    }
}