<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Models\data_penghuni;

class second_sheet_data_penghuni implements FromQuery, WithTitle, WithHeadings
{
    public function query()
    {
        return data_penghuni::query();
    }

    public function title(): string
    {
        return 'data_penghuni';
    }

    public function headings(): array
    {
        return ["id","internet_keluarga_id","nama","banyakGadget"];
    }
}
