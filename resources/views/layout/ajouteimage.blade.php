@extends("layout.app")
@section("content")
<div><a href="ajouter image"></a></div>
<form action="route{{('ajouter_image')}}" methode="post">
@csrf
<br>
<br>
<br>
<div><input type="text" name='text' class='form-control' placeholder="le nom de l'image"></div>
<div><button type="submit" class="btn btn-ptimary">ajouter</button> </div>
</form>

  
@endsection
@section('menu')
<li class="nav-item">
            <a href="index.blade.php" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="inscription.blade.php" class="btn btn-primary js-scroll-trigger">Inscription</a>
</li>
@endsection