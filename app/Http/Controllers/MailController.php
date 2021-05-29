<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMaillable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function indexContacto(){
        return view('contacto');
    }

    public function store(Request $request){
        $email=new ContactoMaillable($request);
        Mail::to('jack20-21@hotmail.com')->send($email);
    }
}
