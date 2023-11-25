<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Pages.home');
    }

    public function submitForm(Request $request){
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ];
        $request->validate($rules);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
}
