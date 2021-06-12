<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jenis_bukuController;
use App\Http\Controllers\Controller;
use App\Exports\Jenis_bukuExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class Jenis_bukuController extends Controller
{
    //
    public function index()
    {
    	$jenis = DB::table('jenis_buku')->get();
    	return view('jenis.index0285',compact('jenis'));
 
    }
    public function jenis_bukuexport()
    {
        return Excel::download(new Jenis_bukuExport, 'DataJenisBuku_1461900285.xlsx');
    }
}
