<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Models\detail_gadget;


class last_sheet_detail_gadget implements FromQuery, WithTitle, WithHeadings
{
    public function query()
    {
        return detail_gadget::query();
    }

    public function title(): string
    {
        return 'detail_gadget';
    }

    public function headings(): array
    {
        return ["id","data_penghuni_id","namaGadget","range"];
    }
}
