<?php

namespace App\Http\Controllers;

use App\Models\apointment;
use Illuminate\Http\Request;
use App\Models\Doctor;

use App\Notifications\myfirstnotification;
use Illuminate\Support\Facades\Notification;

class admincontroller extends Controller
{
    public function admin_add_doctors()
    {
        return view('admin.add_doctor');

    }
    public function send_email(Request $request , $id)
    {
        $data=apointment::find($id);
        $details=[
            'greeting' => $request->greeting ,
            'body' => $request->body ,
            'action_text' => $request->action_text ,
            'action_url' => $request->action_url ,
            'End_Part' => $request->End_Part 
        ];
        Notification::send($data,new myfirstnotification($details));
        return redirect()->back();

    }
    public function emailview($id)
    {
        $data=apointment::find($id);
        return view('admin.email_view',compact('data'));
    }
    public function update_doctor(Request $request  , $id)
    {
        $doctor =  doctor::find($id);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->specialest = $request->espesialest;
        $doctor->room = $request->room;
        $image = $request->image;
        $imagenamef = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage' , $imagenamef);
        $doctor->image = $imagenamef;
        
        $doctor->save();

        return redirect()->back();

    }
    public function ShowAppointments()
    {
        $showappointments = apointment::all();

        return view('admin.ShowAppointments' , compact('showappointments'));

    }
    public function ShowAllDoctors()
    {
        $ShowAllDoctors = doctor::all();

        return view('admin.ShowAllDoctors' , compact('ShowAllDoctors'));

    }
    public function admin_cancel_appointment($id)
    {
        $showappointments = apointment::find($id);
        $showappointments->statuse = 'canceled';
        $showappointments->save();
        return redirect()->back();

    }
    public function admin_delet_doctor($id)
    {
        $showappointments = doctor::find($id);
       $showappointments->delete();
        return redirect()->back();

    }
    public function aprove_appointment($id)
    {
        $showappointments = apointment::find($id);
        $showappointments->statuse = 'aproved';
        $showappointments->save();
        return redirect()->back();

    }
    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('doctorimage' , $imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->specialest = $request->espesialest;
        $doctor->room = $request->room;
        $doctor->save();

        return redirect()->back()->with('massege' , 'inserted new doctor successfuly');

    }
    public function admin_update_doctor($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor' , compact('data'));
    }
}
