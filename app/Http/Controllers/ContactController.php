<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;
use RuntimeException;

class ContactController extends Controller
{
    //
    public function create(){
        return view ('contact');
    }

    public function store(Request $request){
        $name= $request->name;
        $email=$request->email;
        $message=$request->message;
        $privacity=$request->privacity;

        try {
            Mail::to("adrian.busquets@hotmail.com")->send(new ContactNotification($name, $email, $message));

        } catch (RuntimeException $a) {
            return back()->with('message', 'No ha sido posible enviar el correo')->with('code', 400);
        }
        
        return back()->with('message', '¡Correo enviado!')->with('code', 0);
        
    }
}
