<?php

namespace App\Exports;

use App\Models\PembelianModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportTransaksi implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PembelianModel::all();
    }
}
