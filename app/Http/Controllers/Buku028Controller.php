<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Buku0285Controller extends Controller
{
    public function index()
    {
    	$data_buku= buku::all();
    	return view('buku.index',compact('data_buku'));
 
    }
}
