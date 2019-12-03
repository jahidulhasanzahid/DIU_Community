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

        $allBloodPost = DB::table('bloods')
            ->join('studentinformations', 'bloods.userID', '=', 'studentinformations.userID')
            ->join('users', 'bloods.userID', '=', 'users.id')
            ->select('bloods.*', 'studentinformations.*', 'users.*')
            ->orderBy('bloods.id','DESC')
            ->get();
        // dd($allCommunityPost);

    	return view('blood',compact('allBloodPost'));
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
