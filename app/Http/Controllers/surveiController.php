<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class surveiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $namaKeluarga   = $request->namaKeluarga;
        $provider       = $request->provider;
        $bandwidth      = $request->bandwidth;
        $biayaBulanan   = $request->biayaBulanan;
        $jumlahPenghuni = $request->jumlahPenghuni;

        // rapihkan nama penghuni dan jumlah gadget
        for($i = 1; $i <= $jumlahPenghuni; $i++ ){

            $nama           = "nama"."$i";
            $banyakGadget   = "banyakGadget"."$i";

            $arraynpbg[$i][1] = $request->$nama;
            $arraynpbg[$i][2] = $request->$banyakGadget;

            

            //rapihkan data penggunaan
            for ($j = 0; $j < $arraynpbg[$i][2]-1; $j++) { 

                $a = $i; 
                $a -= 1;
                $namaGadget = "namaGadget"."$a"."$j";
                $range = "range"."$a"."$j";

                $arrayngr[$i][1] = $request->$namaGadget;
                $arrayngr[$i][2] = $request->$range;
            }
        }

        dd($arrayngr);
        
        

        



        return view('frontend.penutup');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
