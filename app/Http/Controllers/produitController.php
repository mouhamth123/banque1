<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class produitController extends Controller
{
   public function show($slog){
       return  view('home',compact("slog"));
   }
   public function backoffi(){
    return  view('backoffice.index');
}

}