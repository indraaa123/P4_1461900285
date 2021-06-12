<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function index()
    {
    	$data_user= DB::table('user')->get();
    	return view('user.index0285',compact('data_user'));
 
    }
}
