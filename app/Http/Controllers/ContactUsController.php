<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMailable;
use App\Http\Requests\ContactPostRequest;


class ContactUsController extends Controller
{
    public function index(){
        return view('emails.index');
    }
    public function store(ContactPostRequest $request){

       $request->validated();

        $correo = new ContactUsMailable($request->all());

        Mail::to('contact@odynn.dev')->send($correo);
    
        return view('emails.index');
    }
}
