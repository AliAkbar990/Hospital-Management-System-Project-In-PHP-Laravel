<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class feedbackController extends Controller
{
    public function show()
    {
        if(!Auth::check())
        {
            return redirect('/');
        }

        $feedback = feedback::all();
        return view('admin.feedback', compact('feedback'));
    }

   
    public function j()
    {
        $reviews = feedback::orderBy('created_at', 'desc')->get();
        return view('user.review', compact('reviews'));
    }


    

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'rating' => 'required|string',
            'feedback' => 'required|string'
        ]);

      
        $feedback = new feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->rating = $request->rating;
        $feedback->feedback = $request->feedback;
        $feedback->save();

        //session()->flash('success', 'Feedback added successfully!');
        // return redirect('/review')->with('success', 'feedback added successfully!');
        return redirect()->route('redirect')->with('message', 'Feedback submitted successfully. Thank you for your input!');
    }

    public function d($id)
    {
        $feedback = feedback::where('id',$id)->first();
        if($feedback)
        {
            $feedback->delete();
            // return redirect('/review_show');  
            return Redirect::to('review_show');  
        }

        echo"Sorry, This Is Invalid";
        
    }

    // ProductController

}
