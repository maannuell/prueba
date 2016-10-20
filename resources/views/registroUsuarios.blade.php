@extends('principal')

@section('encabezado')
    <h2>Registro de Usuarios</h2>
@stop

@section('contenido')
   <form action="{{url('/guardarUsuario')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-grup">
           <label for="nombre">Nombre:</label>
           <input name="nombre" class="form-control" placeholder="nombre" type="text" required >
       </div>
       <div class="form-grup">
           <label for="edad">Edad:</label>
           <input name="edad" type="number" class="form-control" placeholder="edad" required>
       </div>
       <div class="form-grup">
           <label for="sexo">Sexo:</label>
           <select name="sexo" class="form-control" required>
               <option value="">Selecionar</option>
               <option value="0">Femenino</option>
               <option value="1">Masculino</option>
           </select>
       </div>
       <div class="form-grup">
           <label for="correo">Correo:</label>
           <input name="correo" type="text" class="form-control" placeholder="correo">
       </div>
       <br>
       <input type="submit" value="registrar" class="btn btn-primary">
       <a href="{{url('inicio')}}" class="btn btn-danger">Cancelar</a>
   </form>
@stop