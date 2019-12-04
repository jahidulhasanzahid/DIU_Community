<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\event;
use App\User;

class eventController extends Controller
{	
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function events(){
         $allEventPost = DB::table('events')
            ->join('studentinformations', 'events.userID', '=', 'studentinformations.userID')
            ->join('users', 'events.userID', '=', 'users.id')
            ->select('events.*', 'studentinformations.type','studentinformations.department', 'users.name')
            ->orderBy('events.id','DESC')
            ->get();

    	return view('event',compact('allEventPost'));
    }


    public function eventPost(Request $request){

    $event = new event();
    $event->userID = Auth::user()->id;
    $event->time = $request->time;
    $event->eventType = $request->eventType;
    $event->description = $request->description;
    
    $event->save();

    session()->flash('success', 'A New Event Create Successfully !!');
    return back();
    }


}
