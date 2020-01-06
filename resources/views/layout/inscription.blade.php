

@extends("layout.app")
@section("content")

<header class="masthead">

<div class="container d-flex h-100 align-items-center">
  <div class="mx-auto text-center">
     
      <form id="form">
<div class="form-group">
    <div id="error"></div>
    <div id="error1"></div>
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>


<div class="form-group">
<label for="exampleInputPassword1">confirmPassword</label>
<input type="password" class="form-control" id="exampleInputPassword2" placeholder="confirmation confirmation Password">
</div>
<div class="form-group form-check">
<!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">-->

</div>
<button type="submit" class="btn btn-primary" id="Submit">Submit</button><br>
<label class="form-check-label" for="exampleCheck1">Veuillez remplir les champs pour activer le bouton</label>
</form>

  </div>



</div>

</header>


<!-- Bootstrap core JavaScript 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Plugin JavaScript 
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for this template 
<script src="js/grayscale.min.js"></script>-->
<script src="js/espaceinscription.js"></script>

  
@endsection
@section('menu')

<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">espace membre</a>
</li>
@endsection