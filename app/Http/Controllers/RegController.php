<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;

class RegController extends Controller
{
    public function show()
    {
      return view('auth.register');
    }
    public function register(Request $request)
    {
      $data = $request->all();
      User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
      ]);
      return redirect()->route('home');
    }
}
