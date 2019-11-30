<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\community;
use App\User;
use App\studentinformation;

class communityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
    	$allCommunityPost = DB::table('communities')
            ->join('studentinformations', 'communities.userID', '=', 'studentinformations.userID')
            ->join('users', 'communities.id', '=', 'users.id')
            ->select('communities.*', 'studentinformations.*', 'users.*')
            ->get();
        // dd($allCommunityPost);
        return view('welcome',compact('allCommunityPost'));
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
