<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\community;
use App\User;

class communityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        return view('welcome');
    }


     public function communityPost(Request $request){

	    $community = new community();
	    $community->userID = Auth::user()->id;
	    $community->statusType = $request->type;
	    $community->status = $request->status;
	    
	    $community->save();

	    session()->flash('success', 'A New Post Added Successfully !!');
	    return back();
	    }


}
