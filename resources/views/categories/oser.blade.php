@extends("layouts.app")
@section("content")
    
    <div class="container">
    <div class="row">
    <br>
    @foreach($image as $image)
   
      
       
       
        


<!-- Button trigger modal -->
<div class="col-md-4">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$image->id}}">

<img class="card-img-top"src="{{$image->images ? asset($image->images) : asset('uploads/images/default.png')}}" alt="{{$image->nom_image}}" height="300" width="500">
</button></div><br><br><br><br>

<!-- Modal -->
<div class="modal fade" id="editModal{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">World pictures</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top"src="{{$image->images ? asset($image->images) : asset('uploads/images/default.png')}}" alt="{{$image->nom_image}}" height="300" width="500">
      
      </div>
      <div class="modal-body">
      <div><strong>{{$image->nom_image}}</strong> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <p>Description:{{$image->description}}</p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
        <div><a href="{{route('download_image',$image->id)}}" class="btn btn-primary" >telecharger</a></div>
      </div>
    </div>
  </div>
</div>


        @endforeach
        </div>
    
   <br>
  </div>

@endsection
       

         
