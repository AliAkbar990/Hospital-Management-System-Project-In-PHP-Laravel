<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    // public function create()
    // {
    //     return view('add_doctor');
    // }

    public function index()
    {
        if(!Auth::check())
        {
            return redirect('/');
        }

        $doctors = Doctor::all();
        return view('user.user',compact('doctors'));
    }

    public function doctor()
    {
        $doctors = Doctor::all();
        return view('user.doctor',compact('doctors'));
    }

    public function save(Request $request)
    {
        $imagename = time().'.'.$request->doctorimage->getClientOriginalExtension();
        $request->doctorimage->move(public_path('images'),$imagename);

        $name = request('name',null);
        $phone = request('phone',null);
        $email = request('email',null);
        $speciality = request('speciality',null);

        Doctor::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'speciality' => $speciality,
            'doctorimage' => $imagename
        ]);

        return Redirect::to('listdoctor')->with('message','Doctor Added Successfully');
    }

    public function doctordetails()
    {
        $name = 'name';
        $phone = 'phone';
        $email = 'email';
        $speciality = 'speciality';
        $imagename = 'doctorimage';

        $doctors = Doctor::get()->toArray();
        $doctors = Doctor::all();

        return view('admin.listdoctor',compact('doctors'));
    }

    public function deletedoctor($id)
    {
        $doctors = Doctor::where('id',$id)->first();

        if($doctors)
        {
            $doctors->delete();

            // Session::flash('message','Patient Deleted Successfully');

            return Redirect::to('listdoctor');
        }

        echo"Sorry, This Is Invalid";
    }

    public function openedit_doctor($id)
    {
        $id = $id;

        $doctors = Doctor::where('id',$id)->first();

        return view('admin.doctor.openedit_doctor',compact('id','doctors'))->with(['id',$doctors]);
    }

    public function UpdateDoctor(Request $request)
    {
        $id = $request -> id;
        $name = $request -> name;
        $phone = $request -> phone;
        $email = $request -> email;
        $phoneno = $request -> phoneno;
        $speciality = $request -> speciality;
        $status = $request -> status;
        $doctorimage = time().'.'.$request->doctorimage->getClientOriginalExtension();
        $request->doctorimage->move(public_path('images'),$doctorimage);

        $doctors = Doctor::where('id',$id)->first();

        $doctors -> name = $name;
        $doctors -> phone = $phone;
        $doctors -> email = $email;
        $doctors -> speciality = $speciality;
        $doctors -> status = $status;
        $doctors -> doctorimage = $doctorimage;

        $doctors -> save();

        return Redirect::to('listdoctor');
    }
}
