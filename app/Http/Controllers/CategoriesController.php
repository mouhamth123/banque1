<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
//Use \App\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;





//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;

class CategoriesController extends Controller
{

    public function faune(){
        $categories = new \App\Category();
        $image = DB::table('images')->where('categories_id',3 )->get();
         //$image->images;   
      // dd($image);
    
        //$image= Image::create($request->All());
        return view('categories.faune',compact('categories','image'));
    }

    public function architecture(){
        $categories = new \App\Category();
        $image = DB::table('images')->where('categories_id',4 )->get();
         //$image->images;   
      // dd($image);
    
        //$image= Image::create($request->All());
        return view('categories.architecture',compact('categories','image'));
    }
      
    public function nature(){
        $categories = new \App\Category();
        $image = DB::table('images')->where('categories_id',1 )->get();
         //$image->images;   
      // dd($image);
    
        //$image= Image::create($request->All());
        return view('categories.nature',compact('categories','image'));
    }
    public function oser(){
        $categories = new \App\Category();
        $image = DB::table('images')->where('categories_id',2 )->get();
         //$image->images;   
     // dd($image);
    
        //$image= Image::create($request->All());
        return view('categories.oser',compact('categories','image'));
    }

}
