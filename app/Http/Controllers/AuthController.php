<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    public function register()
    {
        return view('authentication.register');
    }

    public function registerprocess(Request $request)
    {
        $name = request('name', null);
        $email = request('email', null);
        $password = request('password', null);
    
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        return Redirect::to('login')->with('success', 'User Registered successfully.');
    }




    public function login()
    {
        return view('authentication.login');
    }

    public function loginprocess(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            if(Auth::user()->status == 1)
            {
                return redirect('dashboard');
            }
            else
            {
                return redirect('user');
            }
        }
        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function usermanage()
    {

        $data = User::all();

        return view('admin.showuser',compact('data'));
    }

    public function delete_user($id)
    {
        $users = User::where('id',$id)->first();

        if($users)
        {
            $users->delete();

            return Redirect::to('usermanage');
        }

        echo"Sorry, This Is Invalid";

    }

}
