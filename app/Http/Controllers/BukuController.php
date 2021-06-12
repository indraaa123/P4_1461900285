<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BukuController extends Controller
{
    public function index()
    {
    	$data_buku= DB::table('buku')->get();
    	return view('buku.index',compact('data_buku'));
 
    }
}
