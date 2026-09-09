<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function create(){
        return view('form');
    }

    public function store(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        //Save data to the DB

        User::create($validatedData);

        return redirect('/')->with('success', 'form submitted successfully!');

    } 
}
