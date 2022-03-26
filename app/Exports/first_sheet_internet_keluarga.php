<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;


use App\Models\internet_keluarga;


class first_sheet_internet_keluarga implements FromQuery, WithTitle, WithHeadings
{
    public function query()
    {
        return internet_keluarga::query();
    }

    public function title(): string
    {
        return 'internet_keluarga';
    }

    public function headings(): array
    {
        return ["id","namaKeluarga", "noTelp", "provider","bandwidth","biayaBulanan","jumlahPenghuni","jumlahGadget","kesimpulan"];
    }
}
