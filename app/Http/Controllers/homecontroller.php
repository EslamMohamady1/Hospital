<?php

namespace App\Http\Controllers;

use App\Models\apointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function redirection()
    {
        if(Auth::id()){
            if(Auth::user()->user_type==0)
        {
            $doctor =  doctor::all();
            return view('user.home' , compact('doctor'));
        }
        else
        {
            return view('admin.home');
        }
        }
    }
    public function index()
    {
        $doctor =  doctor::all();
            return view('user.home' , compact('doctor'));
        
    }
    public function appointment(Request $request)
    {
        $appoint = new apointment;
        $appoint->name = $request->name;
        $appoint->email = $request->email;
        $appoint->phone = $request->phone;
        $appoint->doctor = $request->doctor;
        $appoint->data = $request->date;
        $appoint->message = $request->message;
        $appoint->statuse = 'in progress';
    
        $appoint->user_id = Auth::user()->id;
        $appoint->save();
        return redirect("home");
    }
    public function my_appointment()
    {
        $userid = Auth::user()->id;
        $myappoint = apointment::where('user_id' , $userid)->get();
      if(Auth::user()->id)
      {
        return view("user.my_appointment" , compact('myappoint'));
      }  
        
    }
    public function cancel_appointmentt($id)
    {

       $cancled = apointment::find($id);
        $cancled->delete();
        return redirect()->back();
      
        
    }

}
