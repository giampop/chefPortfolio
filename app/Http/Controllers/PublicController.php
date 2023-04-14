<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
}
    public function mipresento(){
        return view('mipresento');
    }

    public function lemiericette () {
        return view('lemiericette');
}
    
public function contattami(){
    return view('contattami');
}

public function contattami_submit(Request $request){
    $name = $request->name;
    $email = $request->email;
    $message = $request->message;
    $user_data = compact('name','email','message');
    
    try{
        Mail::to($email)->send (new ContactMail($user_data));
    }catch(Exception $e){
        return redirect()->back()->with('emailError', 'E\' sorto un errore con l\'invio della mail, riprova più tardi');
  }  
    return redirect (route('homepage'))->with('status','Email inviata correttamente, verrà ricontattato nel più breve tempo possibile');

}
}
