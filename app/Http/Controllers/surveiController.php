<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\internet_keluarga;
use App\Models\data_penghuni;
use App\Models\detail_gadget;

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
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $namaKeluarga   = $request->namaKeluarga;
        $provider       = $request->provider;
        $bandwidth      = $request->bandwidth;
        $biayaBulanan   = $request->biayaBulanan;
        $jumlahPenghuni = $request->jumlahPenghuni;
        $kesimpulan     = $request->kesimpulan; 
        $noTelp         = $request->nomorAktif;

        //store internet_keluarga
            $internet_keluarga = new internet_keluarga;
            $internet_keluarga->namaKeluarga    = $namaKeluarga;
            $internet_keluarga->noTelp          = $noTelp;
            $internet_keluarga->provider        = $provider;
            $internet_keluarga->bandwidth       = $bandwidth;
            $internet_keluarga->biayaBulanan    = $biayaBulanan;
            $internet_keluarga->jumlahPenghuni  = $jumlahPenghuni;
            $internet_keluarga->kesimpulan      = $kesimpulan;
            
            
            // total gadget
                for ($i = 1; $i <= $jumlahPenghuni; $i++) { 
                    $banyakGadget   = "banyakGadget"."$i";
                    $banyakGadgetTotal[$i] = $request->$banyakGadget;
                }

            $internet_keluarga->jumlahGadget    = array_sum($banyakGadgetTotal);
            $internet_keluarga->save();

        // rapihkan dan store nama penghuni dan jumlah gadget
        for($i = 1; $i <= $jumlahPenghuni; $i++ ){

            $nama           = "nama"."$i";
            $banyakGadget   = "banyakGadget"."$i";

            $arraynpbg[$i][1] = $request->$nama;
            $arraynpbg[$i][2] = $request->$banyakGadget;

            $data_penghuni = new data_penghuni;
            $data_penghuni->nama           = $request->$nama;
            $data_penghuni->banyakGadget   = $request->$banyakGadget;
            $data_penghuni->internet_keluarga()->associate($internet_keluarga);
            $data_penghuni->save();

            //rapihkan data penggunaan
            for ($j = 0; $j < $arraynpbg[$i][2]; $j++) { 

                $a = $i; 
                $a -= 1;
                $namaGadget = "namaGadget"."$a"."$j";
                $rangePenggunaan = "range"."$a"."$j";

                //nimpa disini
                // [orangke][gadgetke][nama/range]
                $arrayngr[$i][$j][1] = $request->$namaGadget;
                $arrayngr[$i][$j][2] = $request->$rangePenggunaan;

                $detail_gadget = new detail_gadget;
                $detail_gadget->namaGadget     = $request->$namaGadget;
                $detail_gadget->range          = $request->$rangePenggunaan;
                $detail_gadget->data_penghuni()->associate($data_penghuni);
                $detail_gadget->save();
            }
        
        }         

        return redirect("/penutup");
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
