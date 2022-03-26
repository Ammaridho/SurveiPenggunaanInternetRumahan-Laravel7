<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\exportExcel;

use Maatwebsite\Excel\Facades\Excel;


class exportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function exportExcel(Request $request) 
    {
        $nama = 'Data_Hasil_Survei'.'.xlsx';
        return Excel::download(new exportExcel, $nama);
    }
    
}
