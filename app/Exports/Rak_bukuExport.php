<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class Rak_bukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Rak_buku::all();
    }
}
