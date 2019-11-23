<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
    public function jobs(){
    	return view('job');
    }
}
