<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penggunaanController extends Controller
{
    public function penghuni(Request $request)
    {
        $jmlpenghuni = $request->jumlahpenghuni;

        return view('frontend.formPenggunaan',compact('jmlpenghuni'));
    }

    public function gadget(Request $request)
    {   
        $jmlpenghuni    = $request->ke;
        $jmlgadget      = $request->bg;
        $nama           = $request->nama;
        
        return view('frontend.formgadget',compact('jmlpenghuni','jmlgadget','nama'));
    }
}
