@extends("layouts.app")
@section("content")
<br><br><br><br><br><br><br><br>
@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif

<div><a href="image/create" class="btn btn-primary">ajouter une image</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="/home" class="btn btn-primary">Accueil</a></div><br>
<table borderbgcolor="yellow" bordercolor="green" class="table table-striped">
       <tr>
           <th>#</th>        
             <th>Nom image</th>          
            <th>Description</th>
            <th>Images</th>
            <th><th>Edite & Suppression</th></th>
       </tr>
       @foreach($image as $image)
           <tr>
               <th>{{$image->id}}</th>
               <th>{{$image->nom_image}}</th>
               <th>{{$image->description}}</th>
               <th><img src="{{$image->images ? asset($image->images) : asset('uploads/images/default.png')}}" alt="{{$image->nom_image}}" width="50"style="border-color:#FF0000"></th>
               <th><a href="{{route('editer_image',['id'=>$image->id])}}" class="btn btn-primary">Editer</a></th>
               <th>           <form action="image/{{$image->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form></th>
           </tr>
       @endforeach
   </table>

  


@endsection 