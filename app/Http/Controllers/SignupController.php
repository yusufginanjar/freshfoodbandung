<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup', [
            "title" => "Sign In"
        ]);
    }

    public function store(Request $request)
    {

        // return $request->all();

        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'max:255',
            'username' => 'required|unique:users|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'whatsapp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|min:4|max:255|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:4|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);


        $request->session()->flash('success', 'Registration successful! Please login');

        return redirect('/login');
    }
}
