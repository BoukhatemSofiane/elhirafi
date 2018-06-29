<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworldController extends Controller
{
	public function index(Request $req)
	    {
	    	$v = 'kira';
	   		return view('hw',['kira' => $v]);
	    }    
}
