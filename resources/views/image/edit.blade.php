


@extends("layouts.app")
@section("content")
<form action="{{route('update_image',['id'=>$image->id])}}" method="post" enctype="multipart/form-data">
   @csrf
   @method('patch')
   
   <div ><input type="text" name="nom_image" class="form-control" placeholder="le nom du produit" value="{{$image->nom_image}}"></div>
   <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$image->description}}</textarea> </div>
                     
    <div>

    <div class="row">
   <div class="col-6 text-right"><img src="{{asset($image->images)}}" alt="{{$image->nom_image}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="images" class="form-control">
</div>


   <div>
   <select name="categories_id" id="categories_id" class="form-control">
      
       @foreach($categories as $key => $value)
           <option value="{{$key}}" {{ $key == $image->categories_id ? 'selected="selected"':''}} >{{$value}}</option>
       @endforeach
   </select>
</div>
   <div> <button class="btn btn-primary">Editer</button> </div>
</form>
@endsection