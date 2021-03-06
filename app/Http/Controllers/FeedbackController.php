<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class FeedbackController extends Controller
{
    public function main(Request $request)
    {
      if($request->isMethod('get')){
        return view('feedback');
      }
      $data = $request->all();
      $m = Mail::send('email.feedback',$data,function ($message) use($data) {
        $message->from($data['email']);
        $message->to('feedback@nasledie-rusi.ru')->subject('feedback');
      });
      return view('feedback');

    }
}
