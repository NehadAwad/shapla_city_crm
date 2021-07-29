<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function create(Request $request)
    {
      $id=$request->id;
      $user=User::where('id',$id)->first();
        return view('email',compact('user'));
    }

    public function sendEmail(Request $request)
    {
      $id=$request->id;
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

       Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });
    
        Session::flash('success',"Send Email");
        return redirect("admin/member/{$id}");
    
       
    }
}
