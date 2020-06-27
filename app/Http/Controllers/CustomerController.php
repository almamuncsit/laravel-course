<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
    	// $customers =  DB::table('customers')->get();

    	$customers = DB::table('customers')
					    ->where('id', 5)
					    ->delete();
    	
    	var_dump($customers);    
    }
}
