<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class postControlController extends Controller
{
    public function community(){
        $posts = DB::table('users')
            ->join('communities', 'users.id', '=', 'communities.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','communities.*','studentinformations.type')
            ->get();
    	return view('admin.manage-community',compact('posts'));
    }

    public function event(){
        $posts = DB::table('users')
            ->join('events', 'users.id', '=', 'events.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','events.*','studentinformations.type')
            ->get();
    	return view('admin.manage-event',compact('posts'));
    }

    public function job(){
        $posts = DB::table('users')
            ->join('jobs', 'users.id', '=', 'jobs.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','jobs.*','studentinformations.type')
            ->get();
    	return view('admin.manage-job',compact('posts'));
    }

    public function blood(){
        $posts = DB::table('users')
            ->join('bloods', 'users.id', '=', 'bloods.userID')
            ->join('studentinformations','users.id', '=', 'studentinformations.userID')
            ->select('users.name','bloods.*','studentinformations.type')
            ->get();
    	return view('admin.manage-blood',compact('posts'));
    }
}
