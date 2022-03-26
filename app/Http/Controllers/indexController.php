<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\internet_keluarga;

class indexController extends Controller
{
    public function index()
    {
        $jumlahData = count(internet_keluarga::all());
        return view('frontend.index',compact('jumlahData'));
    }

    public function penutup()
    {
        return view('frontend.penutup');
    }
}
