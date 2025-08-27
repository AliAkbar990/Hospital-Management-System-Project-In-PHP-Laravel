<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\AppointmentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.home');
});

Route::get('login', function () {
    return view('authentication.login');
});

Route::get('register', function () {
    return view('authentication.register');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('user', function () {
//     return view('user');
// })->name('user');

// Route::get('user', function () {
//     return view('user.user');
// });

Route::get('about', function () {
    return view('user.about');
});

Route::get('contact', function () {
    return view('user.contact');
});

Route::get('doctor', function () {
    return view('user.doctor');
});

Route::get('admin_layout', function () {
    return view('layout.admin_layout');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('listdoctor', function () {
    return view('admin.listdoctor');
});

Route::get('add_doctor', function () {
    return view('admin.doctor.add_doctor');
});


                    //  User Manage Route
                    

Route::get('login', [AuthController::class,'login']);

Route::post('login', [AuthController::class,'loginprocess']);
                    
Route::get('register', [AuthController::class,'register']);
                    
Route::post('registerprocess', [AuthController::class,'registerprocess']);

Route::get('usermanage',[AuthController::class,'usermanage']);

Route::get('delete_user/{id}',[AuthController::class,'delete_user']);
                    
Route::get('logout', [AuthController::class,'logout']);



                    //  Doctor Manage Route


Route::get('/user', [DoctorController::class, 'index']);

Route::get('/doctor', [DoctorController::class,'doctor']);

// Route::get('add_doctor',[DoctorController::class,'create']);

Route::post('upload_doctor',[DoctorController::class,'save']);

Route::get('listdoctor',[DoctorController::class,'doctordetails'])->name('admin.listdoctor');

Route::get('delete_doctor/{id}',[DoctorController::class,'deletedoctor']);

Route::get('openedit_doctor/{id}',[DoctorController::class,'openedit_doctor']);

Route::post('UpdateDoctor',[DoctorController::class,'UpdateDoctor']);



                   //  Patient Manage Route

Route::post('add_appointment',[AppointmentController::class,'storeappointment']);

Route::get('myappointment',[AppointmentController::class,'myappointment']);

Route::get('showappointment',[AppointmentController::class,'showappointment']);

Route::get('approved/{id}',[AppointmentController::class,'approved']);

Route::get('canceled/{id}',[AppointmentController::class,'canceled']);

Route::get('printData/{id}',[AppointmentController::class,'printData']);





                   //  Staff Manage Route

Route::get('/staff', function () {
    return view('admin.staff');
});

Route::get('/staff', [staffController::class,'show']);

Route::get('/add_staff', [staffController::class,'add']);

Route::post('/add', [StaffController::class, 'store']); 

Route::get('/update/{id}', [StaffController::class, 'up']); 

Route::post('/upd/{id}', [StaffController::class, 's']); 

Route::get('/delete/{id}', [StaffController::class, 'd']); 

Route::get('/dashboard', [DashbordController::class, 'index']);




                   //  UserFeedback Manage Route


Route::get('/review', function () {
    return view('user.review');
});

Route::get('/us_layout', function () {
    return view('layout.user_layout');
});

Route::get('/review', [feedbackController::class,'j'])->name('redirect');

Route::get('/review_show', [feedbackController::class,'show']);

Route::post('/add_feedback', [feedbackController::class, 'store']);

Route::get('/succec', function () {
    return view('user.succec');
});

Route::get('/delete_feedback/{id}', [feedbackController::class, 'd']); 





Route::get('/fix-migrate', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return nl2br(Artisan::output());
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

