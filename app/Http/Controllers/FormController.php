<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function formSend(Request $request)
    {
        
        
        Mail::send('emails.quickbuy', ['phone' => $request->phone], function($message){
            $mailto = 'maxdzhoga@gmail.com';
            $message->from('info@makeitbetter.ru');
            $message->to($mailto);
            $message->subject('Быстрый заказ');
        });
        //return $request->phone;
        dd("Mail Send Successfully");
    }
}
