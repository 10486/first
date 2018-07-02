<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogController extends Controller
{




    public function login(Request $request)
    {


      if($request->isMethod('get')){
        return view('auth.login');
      }




      $array = $request->all();
      $auth = Auth::attempt([
                            'email'=>$array['email'],
                            'password'=>$array['password']
                          ]
                          );
      if($auth){
          return redirect()->intended('/admin');
      }
      return redirect()->back()->withInput($request->only('login','remember'))->withErrors(['login'=>'Данные введены неверно']);
    }




    public function logout()
    {
      Auth::guard('web')->logout();
      return redirect()->route('login');
     }
}
