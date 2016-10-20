<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Http\Requests;

class proyectosController extends Controller
{
    //
    public function registro(){
        return view('proyectos.registroProyectos');
    }
    public  function guardar(Request $datos){
        $nuevo = new Proyecto();
        $nuevo->nombre=$datos->input('nombre');
        $nuevo->f_inicio=$datos->input('f_inicio');
        $nuevo->f_fin=$datos->input('f_fin');
        $nuevo->save();

        return Redirect('registroProyectos');
    }

    public function consultar(){
        $proyectos=proyecto::all();
        return view('proyectos.consultarProyectos',compact('proyectos'));
    }

    public function eliminar($id){
        Proyecto::find($id)->delete();
        return Redirect ('consultarProyectos');
    }

    public function editar($id){
        $proyecto=Proyecto::find($id);
        return view('proyectos.editarProyecto',compact('proyecto'));
    }

    public function actualizar($id,Request $datos){
        $proyecto=Proyecto::find($id);
        $proyecto->nombre=$datos->input('nombre');
        $proyecto->f_inicio=$datos->input('f_inicio');
        $proyecto->f_fin=$datos->input('f_fin');
        $proyecto->save();

        return Redirect('/consultarProyectos');

    }

    public function generar(){
        $proyectos=Proyecto::all();

        $vista=view('proyectos.pdfProyectos',compact('proyectos'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream('ListaProyectos.pdf');
    }

    public function asignarUsuario($id){
        dd($id);

    }

}
