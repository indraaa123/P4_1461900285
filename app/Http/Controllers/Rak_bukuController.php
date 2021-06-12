<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
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
}
