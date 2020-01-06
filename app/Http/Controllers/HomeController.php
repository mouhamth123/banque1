<?php

namespace App\Http\Controllers;
//use app/User;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     
    public function index()
    {    

        $imag=\App\Image::all();
        $image=\App\Image::all();
        return view('home',compact('image','imag'));
    }  

 
    
    public function accueil()
    {
        $u= \App\User::all();
        //dd($u);
        return view('accueil',compact('u'));
    }


    public function ajoute()
    {
        $images=\App\Image::get();
        return view('layout.ajouteimage',compact('images'));
    }


  /*  public function store(request $request)
    {
        $image = new Image();
        $image->nom_image = $request->input('nom_image');
        $image->categories_id = $request->input('categories_id');

        $image->save();
        
        $data = $request->validate([
            'nom_image'=>'required|min:5' ]);
            
        //return redirect('/image');
        return redirect()->route('Images.index')->with(['success' => "Image enregistré"]);}*/


  

        public function store(request $request)
        {
           $request->validate([
               "nom_image"=>"required|max:300|min:5",
               "description"=>"required",
               "images" => ' image | mimes:jpeg,png,jpg,gif | max: 2048'
           ]);
           $imag = new Image();
        
           //On verfie si une image est envoyée
           $imag->nom_image = $request->input('nom_image');
           $imag->description = $request->input('description');
           $imag->user_id= $request->user()->id;
           $imag->categories_id = $request->input('categories_id');

           if($request->has('images')){
            //On enregistre l'image dans un dossier
            $image = $request->file('images');
            
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('nom_image')).'_'.time();
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $imag->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
           $imag->save();
           return redirect(route('Images.index'));
        }
      

        
     




    
    public function indexe(){

        //$this->authorize('admin');
        //$imag=\App\Image::orderBy('created_at', 'DESC')->get();
       $image = \App\Image::orderBy('created_at', 'DESC')->get();
       dd($image);
        //$categories= \App\Category::get();
        return view('image.image', compact('image','categories'));
     }
     public function create()
     {
        $image=new Image();
        $categories = \App\Category::pluck('nom_cat','id');
      return view('image.create',compact('image','categories'));
     }

     public function edit($id)
{
   $image=Image::find($id);//on recupere le produit
   $categories=\App\Category::pluck('nom_cat','id');
    return view('image.edit', compact('image','categories'));
}

/* public function update(Request $request,$id){
    $image = Image::find($id);
  
    if($image){
      
       $image->update([
            'nom_image' => $request->input('nom_image'),
            'description' => $request->input('description'),
            'categories_id' => $request->input('categories_id'),
            'images' => $request->input('images')

        ]);
      
        $image->save();
        $data = $request->validate([
            'nom_image'=>'required|min:5',
            'categories_id'=>'required',
            'images' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048' ]);
 
    }
  
   return redirect()->route('Images.index')->with(['success' => "Image mise à jour"]);
 }*/
 public function update(Request $request, $id)
{
   $data = $request->validate([
      'nom_image'   => 'required',
      'description' => 'required',
      'images' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
   ]);
   $product = \App\Image::find($id);
   if($product){
       if($request->has('images')){
           //On enregistre l'image dans une variable
           $image = $request->file('images');
           if(file_exists(public_path().$product->images))//On verifie si le fichier existe
               Storage::delete(asset($product->images));//On le supprime alors
           //Nous enregistrerons nos fichiers dans /uploads/images dans public
           $folder = '/uploads/images/';
           $image_name = Str::slug($request->input('nom_image')).'_'.time();
           $product->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
           //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
           $this->uploadImage($image, $folder, 'public', $image_name);
       }
       $product->nom_image  = $request->input('nom_image');
       //$product->price = $request->input('price');
       $product->description = $request->input('description');
       $product->categories_id = $request->input('categories_id');

       $product->save();
   }
   return redirect()->route('Images.index')->with(['success' => "Image mise à jour"]);

}



 public function destroy($id)
{
   $image = Image::find($id);
   if($image)
       $image->delete();
   return back()->with(['success' => "Image $image->nom_image supprimé"]);
}

public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
    $name = !is_null($filename) ? $filename : str_random('25');
    $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
 
    return $file;
 }

 public function show($id)
 {
    $image=Image::find($id);//on recupere le produit
    ($image->images);
    $file = public_path().$image->images;
    $headers = array('Content-Type: application/pdf',);
    return Response::download($file);
    //return Storage::download('image_1576787968.jpg');
 }
     
}

