<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

//Use \App\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;





use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;
class UserController extends Controller
{
    
    public function profile(){
        $user = Auth::user();
        //dd($user);
        
        $image = DB::table('images')->where('user_id',$user->id )->get();
         //$image->images;   
     
    
        //$image= Image::create($request->All());
        return view('users.profil',compact('user','image'));
    }
   

    public function update_avatar(Request $request)
    {


        
        $user=new \App\User();
        if($request->has('avatar')){
            $image = $request->avatar;
          //  dd($image);
            $filename= time().'_'.$image;
           //dd($filename);
            Image::make($image)->resize(300,300)->save('public/uploads/avatars/'.$filename);
            

            $user= Auth::user();
            $user->avatar=$filename;
            $user->save();
         }
            return view('users.profil',array('user'=>Auth::user()));
       
    }


    public function destroy($id)
    {
       $image = \App\User::find($id);
       dd($image);
       if($image)
           $image->delete();
       return back()->with(['success' => "Image $image->name supprimé"]);
    }
    

}
