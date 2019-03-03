<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;

class MailController extends Controller
{
    public function index(){
        return view("mail.home");
    }
    public function sendEmail(Request $req){
        $name=$req->name;
        $email=$req->email;
        $message = $req->message;
        Mail::send(new SendEmail($name, $message));
    }
}
