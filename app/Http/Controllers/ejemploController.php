<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ejemploController extends Controller
{
    //
    public function index(){
    	return view('principal');
    }
    public function inicio(){
        return view('home');
    }
    public function  registroUsuarios(){
        return view('registroUsuarios');
    }

    public function  trabajo(){
        return view('trabajo');
    }
}
