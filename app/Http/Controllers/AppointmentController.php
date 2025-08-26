<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    // public function print()
    // {
    //     return view('user.print');
    // }

    public function storeappointment(Request $request)
    {
        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;
        
        $data->age=$request->age;
        
        $data->weight=$request->weight;
        
        $data->height=$request->height;

        $data->date=$request->date;
        
        $data->doctor=$request->doctor;
        
        $data->phone=$request->phone;
        
        $data->message=$request->message;
        
        $data->status='In Progress';
        
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Successfull . We Will Contact With You Soon');
        
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;

            $appoint = Appointment::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function showappointment()
    {

        if(!Auth::check())
        {
            return redirect('/');
        }

        $data = Appointment::all();

        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = Appointment::find($id);

        $data->status='Canceled';

        $data->save();

        return redirect()->back();
    }

    public function printData($id)
    {

        $data = Appointment::find($id);

        return view('user.printData',compact('data'));
    }

}
