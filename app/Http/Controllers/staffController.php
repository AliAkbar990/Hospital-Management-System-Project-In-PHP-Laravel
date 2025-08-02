<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use Illuminate\Support\Facades\Auth;

class staffController extends Controller
{
    public function show()
    {
        if(!Auth::check())
        {
            return redirect('home');
        }

        $staff = Staff::all();
        return view('admin.staff', compact('staff'));
    }

    public function add()
    {
        return view('admin.addstaff');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'work' => 'required|string',
            'phone' => 'required|string',
        ]);

      
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->work = $request->work;
        $staff->phone = $request->phone;
        $staff->save();

        return redirect('/staff')->with('success', 'Employee added successfully!');
    }

    public function up($id)
    {
        $staff = staff::where('id',$id)->first();
        return view ('admin.editstaff', compact('staff'));

    }

    public function s(Request $request,$id)
    {
        $staff = staff::where('id',$id)->first();
        $staff->name = $request->name;
        $staff->work = $request->work;
        $staff->phone = $request->phone;
        $staff->save();

        return redirect('/staff')->with('success', 'Employee upadte successfully!');
    }

    public function d($id)
    {
        $staff = staff::where('id',$id)->first();
        $staff->delete();
        return redirect('/staff')->with('success', 'Employee delete successfully!');
    }
}
