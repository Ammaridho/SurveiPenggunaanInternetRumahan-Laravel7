<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class exportExcel implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'internet_keluarga' => new first_sheet_internet_keluarga(),
            'data_penghuni'     => new second_sheet_data_penghuni(),
            'detail_gadget'     => new last_sheet_detail_gadget()
        ];
    }
}