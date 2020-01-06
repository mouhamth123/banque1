<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\mail;
use Illuminate\Mail\Mailer;

class AbonnementController extends Controller
{
    public function expired(){
        $name = "Amadou";
        $date = "31 - 12 -2019";
        Illuminate\Support\Facades\Mail::to('paab26@gmail.com')->send(new AbonnementMail($name, $date));
        return "Message envoyé";
     }
     
     

}
