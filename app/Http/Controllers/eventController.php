<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function events(){
    	return view('event');
    }
}
