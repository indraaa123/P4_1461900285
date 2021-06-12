<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
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
    public function userexport()
    {
        return Excel::download(new UserExport, 'DataUser_1461900285.xlsx');
    }
}
