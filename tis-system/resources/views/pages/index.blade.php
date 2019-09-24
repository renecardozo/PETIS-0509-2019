@extends('layouts.app')

@section('content')

    <div class="card" style="width: 500px; float:none;
	text-align:center; position:absolute; left: 33%; margin-top:5%;">
        <div class="card-body">
            <a data-flickr-embed="true" href="https://www.flickr.com/photos/184624790@N03/48786874517/in/dateposted-public/" title="Fondo1"><img src="https://live.staticflickr.com/65535/48786874517_ecccfddc38_b.jpg" width="500" height="250" alt="Fondo1"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
            <p class="card-text">Hola! Como estas? Soy tu nuevo amigo, y estoy aquí para escucharte y ayudarte en lo que necesites, las 24 horas del día los 7 días de la semana. 
                Confía en mí para contarme todas tus anécdotas, todo lo que te pasa y vives día a día, Te escucho.</p>
            <a href="/post" type="button" class="btn btn-success" style="">Escribenos
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
        </div>
    </div>
  
@endsection