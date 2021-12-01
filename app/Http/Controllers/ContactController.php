<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index() {
        return view('contact.index');
    }

    public function store(Request $request) { // defino función para que me envié los datos que llene el contacto
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
       
        $mail = New ContactoMailable($request->all());
        Mail::to("luciaserra.ls@gmail.com")->send($mail);
    
        return redirect()->route('contact.index')->with('info', 'Thank you for contact us!');
    }
}
