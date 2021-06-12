<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jenis_bukuController;
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
}
