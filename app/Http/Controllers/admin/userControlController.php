<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class userControlController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function teacher(){
    	return view('admin.manage-teacher');
    }

    public function student(){
    	return view('admin.manage-student');
    }
}
