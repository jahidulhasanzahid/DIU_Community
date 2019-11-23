<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bloodController extends Controller
{
    public function bloods(){
    	return view('blood');
    }
}
