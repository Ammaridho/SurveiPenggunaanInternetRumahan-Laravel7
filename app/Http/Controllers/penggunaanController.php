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
        $$jmlgadget = $request->ke;
        
        // $bg[] = $request->bg;

        // dd($bg[]);

        
        return view('frontend.formgadget',compact('jmlgadget'));
    }
}
