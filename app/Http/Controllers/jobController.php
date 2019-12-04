<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\job;
use App\User;

class jobController extends Controller
{	

	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function jobs(){
        $allJobPost = DB::table('jobs')
            ->join('studentinformations', 'jobs.userID', '=', 'studentinformations.userID')
            ->join('users', 'jobs.userID', '=', 'users.id')
            ->select('jobs.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->orderBy('jobs.id','DESC')
            ->get();
        // dd($allCommunityPost);

    	return view('job',compact('allJobPost'));
    }


    public function jobPost(Request $request){

    $job = new job();
    $job->userID = Auth::user()->id;
    $job->jobType = $request->jobType;
    $job->description = $request->description;
    
    $job->save();

    session()->flash('success', 'A New Job Post Added Successfully !!');
    return back();
    }

}
