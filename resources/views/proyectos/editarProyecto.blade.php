@extends('principal')

@section('encabezado')
    <h2>Actualizar Proyectos</h2>
@stop

@section('contenido')
    <form action="{{url('/actualizarProyecto')}}/{{$proyecto->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-grup">
            <label for="nombre">Nombre:</label>
            <input name="nombre" class="form-control" placeholder="nombre" type="text" value="{{$proyecto->nombre}}" required >
        </div>
        <div class="form-grup">
            <label for="f_inicio">Fecha Inicio:</label>
            <input name="f_inicio" type="date" class="form-control" placeholder="f_inicio" value="{{$proyecto->f_inicio}}" required>
        </div>
        <div class="form-group">
            <label for="f_fin">Fecha Fin:</label>
            <input name="f_fin" type="date" class="form-control" placeholder="f_fin"  value="{{$proyecto->f_fin}}" required>
        </div>


        <input type="submit" value="Actualizar" class="btn btn-primary">
        <a href="{{url('consultarProyectos')}}" class="btn btn-danger">Cancelar</a>
    </form>
@stop