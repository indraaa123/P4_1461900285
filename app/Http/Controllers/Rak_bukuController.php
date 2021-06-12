<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Rak_bukuController;
use App\Http\Controllers\Controller;
use App\Exports\Rak_bukuExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class Rak_bukuController extends Controller
{
    //
    public function index()
    {
    	$data_rak= DB::table('rak_buku')->get();
    	return view('rak_buku.index0285',compact('data_rak'));
 
    }
    public function rak_bukuexport()
    {
        return Excel::download(new Rak_bukuExport, 'DataRakBuku_1461900285.xlsx');
    }
}
