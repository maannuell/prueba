@extends('principal')

@section('encabezado')
    <hr>
    <h2>Consulta de Usuarios
        <a href="{{url('/generarpdfUsuarios')}}">
    <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
        </a>
    </h2>
@stop

@section('contenido')
  <table class="table table-hover">
      <thead>
      <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Edad</th>
          <th>Sexo</th>
          <th>Correo</th>
      </tr>
      </thead>
      <tbody>
          @foreach($usuarios as $u)
              <tr>
                  <td>{{$u->id}}</td>
                  <td>{{$u->nombre}}</td>
                  <td>{{$u->edad}}</td>
                  <td>{{$u->sexo== 1 ? 'Masculino' : 'Femenino'}} </td>
                  <td>{{$u->correo}}</td>
                    <td>
                        <a href="{{url('/editarUsuario')}}/{{$u->id}}" class="btn btn-success btn-xs"><span
                                    class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span> </a>

                        <a href="{{url('/eliminarUsuario')}}/{{$u->id}}" class="btn btn-danger btn-xs"><span
                                    class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span> </a>
                    </td>
              </tr>
              @endforeach
      </tbody>
  </table>
@stop