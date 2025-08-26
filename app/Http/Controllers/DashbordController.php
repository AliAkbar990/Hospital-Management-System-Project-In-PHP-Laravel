<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Doctor;
use App\Models\feedback;
use App\Models\Staff;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function index()
{

    if(!Auth::check())
    {
        return redirect('/');
    }
    
    $totalUsers = User::count();
    $totalDoctors = Doctor::count();
    $totalStaff = Staff::count();
    $totalAppointments = Appointment::count();
    $totalfeedback = feedback::count();

    return view('admin.dashboard', compact(
        'totalUsers',
        'totalDoctors',
        'totalStaff',
        'totalAppointments',
        'totalfeedback'
    ));
}
}
