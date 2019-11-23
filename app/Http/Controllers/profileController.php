<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
    	return view('profile');
    }

    public function profileEdit(){
    	return view('profile-update');
    }
}
