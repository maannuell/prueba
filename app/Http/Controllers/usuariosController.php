<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class usuariosController extends Controller
{
    public function guardar(Request $datos){
        $nuevo = new Usuario();
        $nuevo->nombre=$datos->input('nombre');
        $nuevo->edad=$datos->input('edad');
        $nuevo->sexo=$datos->input('sexo');
        $nuevo->correo=$datos->input('correo');
        $nuevo->save();

        return Redirect('registroUsuarios');
    }

    public function consultar(){
        $usuarios=usuario::all();
        return view('consultarUsuarios',compact('usuarios'));
    }

    public function eliminar($id){
        Usuario::find($id)->delete();
        return Redirect('/consultarUsuarios');
    }

    public function editar($id){
       $usuario=Usuario::find($id);
        return view('editarUsuario',compact('usuario'));
    }

 public function  actualizar($id, Request $datos){
     $usuario=Usuario::find($id);
     $usuario->nombre=$datos->input('nombre');
     $usuario->edad=$datos->input('edad');
     $usuario->sexo=$datos->input('sexo');
     $usuario->correo=$datos->input('correo');
     $usuario->save();

     return Redirect ('/consultarUsuarios');
 }

 public function generarpdfusuarios(){
     $usuarios=Usuario::all();

     $vista=view('pdfUsuarios',compact('usuarios'));
     $dompdf=\App::make('dompdf.wrapper');
     $dompdf->loadHTML($vista);
     return $dompdf->stream('ListaUsuarios.pdf');
 }
}
