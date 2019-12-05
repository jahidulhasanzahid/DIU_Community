<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class postControlController extends Controller
{
    public function community(){
    	return view('admin.manage-community');
    }

    public function event(){
    	return view('admin.manage-event');
    }

    public function job(){
    	return view('admin.manage-job');
    }

    public function blood(){
    	return view('admin.manage-blood');
    }
}
