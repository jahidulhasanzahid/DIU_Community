<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\blood;
use App\User;

class bloodController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function bloods(){
    	return view('blood');
    }

    public function bloodPost(Request $request){

    $blood = new blood();
    $blood->userID = Auth::user()->id;
    $blood->bloodGroup = $request->bloodGroup;
    $blood->description = $request->description;
    
    $blood->save();

    session()->flash('success', 'A New Post Added Successfully !!');
    return back();
    }

}
