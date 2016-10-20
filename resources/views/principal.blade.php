<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Proyectos</title>
    <script src="{{asset("js/jquery.js")}}"></script>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('inicio')}}">Inicio</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/trabajo')}}">Trabajo <span class="sr-only">(current)</span></a></li>
        <li class="disabled"><a href="">link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registroUsuarios')}}">Registrar</a></li>
            <li><a href="{{url('/consultarUsuarios')}}">Consultar</a></li>
            <li class="disabled"><a href="#">blanco</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proyectos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{url('/registroProyectos')}}">Registrar</a></li>
                  <li><a href="{{url('/consultarProyectos')}}">Consultar</a></li>
                  <li class="disabled"><a href="#">Blanco</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
              </ul>
          </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="disabled"><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>
<section class="container">
	<div class="row">
		<div class="col-xs-12">
	        @yield('encabezado')
            <hr>
            @yield('contenido')

		</div>
	</div>
	<section>
<footer>
	<hr>
	<div class="text-center">Manuel Meza &copy; 2016</div>
</footer>
        <script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>
