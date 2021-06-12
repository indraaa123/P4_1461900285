<?php

namespace App\Exports;

use App\Models\Rak_buku;
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
    public function jenis_bukuexport()
    {
        return Excel::download(new Jenis_bukuExport, 'DataJenisBuku_1461900285.xlsx');
    }
}
