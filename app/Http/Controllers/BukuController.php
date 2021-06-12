<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Controller;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class BukuController extends Controller
{
    public function index()
    {
    	$data_buku= DB::table('buku')->get();
    	return view('buku.index0285',compact('data_buku'));
 
    }
    public function bukuexport()
    {
        return Excel::download(new BukuExport, 'Data_1461900285.xlsx');
    }
}
