@extends('principal')

@section('encabezado')
    <h2>Editar  Usuario</h2>
@stop

@section('contenido')
   <form action="{{url('/actualizarUsuario')}}/{{$usuario->id}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-grup">
           <label for="nombre">Nombre:</label>
           <input name="nombre" class="form-control" placeholder="nombre" type="text" value="{{$usuario->nombre}}" required >
       </div>
       <div class="form-grup">
           <label for="edad">Edad:</label>
           <input name="edad" type="number" class="form-control" placeholder="edad" value="{{$usuario->edad}}" required>
       </div>
       <div class="form-grup">
           <label for="sexo">Sexo:</label>
           <select name="sexo" class="form-control" required>
               <option value="">Selecionar</option>
               @if($usuario->sexo==0)
               <option value="0" selected>Femenino</option>
               <option value="1">Masculino</option>
                   @else
                   <option value="0">Femenino</option>
                   <option value="1" selected>Masculino</option>
                @endif
           </select>
       </div>
       <div class="form-grup">
           <label for="correo">Correo:</label>
           <input name="correo" type="text" class="form-control" value="{{$usuario->correo}}" placeholder="correo">
       </div>
       <br>
       <input type="submit" value="Actualizar" class="btn btn-primary">
       <a href="{{url('consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
   </form>
@stop