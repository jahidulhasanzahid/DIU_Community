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
    	$users = DB::table('users')
            ->join('studentinformations', 'users.id', '=', 'studentinformations.userID')
            ->where('studentinformations.type','teacher')
            ->select('users.id','users.name','users.email','studentinformations.department','studentinformations.SRid','studentinformations.blood')
            ->get();
    	return view('admin.manage-teacher',compact('users'));
    }

    public function student(){
    	$users = DB::table('users')
            ->join('studentinformations', 'users.id', '=', 'studentinformations.userID')
            ->where('studentinformations.type','student')
            ->select('users.id','users.name','users.email','studentinformations.department','studentinformations.SRid','studentinformations.blood')
            ->get();
    	return view('admin.manage-student',compact('users'));
    }
}
