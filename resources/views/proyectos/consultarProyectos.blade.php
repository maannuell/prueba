@extends('principal')

@section('encabezado')
    <hr>
    <hr>
    <h2>Consulta de Proyectos
        <a href="{{url('/generarpdfProyectos')}}">
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
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($proyectos as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->nombre}}</td>
                <td>{{$u->f_inicio}}</td>
                <td>{{$u->f_fin}}</td>
                <td>

                    <a href="{{url('/asignarUsuario')}}/{{$u->id}}" class="btn btn-primary btn-xs"><span
                                class="glyphicon glyphicon-user" aria-hidden="true">Asignar</span> </a>


                    <a href="{{url('/editarProyecto')}}/{{$u->id}}" class="btn btn-success btn-xs"><span
                                class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span> </a>

                    <a href="{{url('/eliminarProyecto')}}/{{$u->id}}" class="btn btn-danger btn-xs"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span> </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop