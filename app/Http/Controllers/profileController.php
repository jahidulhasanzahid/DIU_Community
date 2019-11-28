<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\studentinformation;

class profileController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function profile(){
    	return view('profile');
    }

    public function profileEdit(){
    	return view('profile-update');
    }

    public function profileUpdate(Request $request){
        $data = 0;
        $val = DB::table('studentinformations')->get();
        foreach ($val as $key) {
            $data = $key->userID;
        }
        if (Auth::user()->id == $data) {
            $updatePro = DB::table('studentinformations')
            ->where('userID', Auth::user()->id)
            ->update(['type' => $request->type,'SRid' => $request->SRid, 'department'=>$request->department,'batch'=> $request->batch,'dob' =>$request->dob,'mobile'=>$request->mobile,'blood'=>$request->blood,'bloodStatus'=>$request->bloodStatus,'currentJob'=>$request->currentJob]);
        }
        else{

        $studentinformation = new studentinformation();
        $studentinformation->userID = Auth::user()->id;
        $studentinformation->type = $request->type;
        $studentinformation->SRid = $request->SRid;
        $studentinformation->department = $request->department;
        $studentinformation->batch = $request->batch;
        $studentinformation->dob = $request->dob;
        $studentinformation->mobile = $request->mobile;
        $studentinformation->blood = $request->blood;        

        $studentinformation->save();
    }
        session()->flash('success', 'Your Profile Update successfully !!');
        return back();

        }

}
