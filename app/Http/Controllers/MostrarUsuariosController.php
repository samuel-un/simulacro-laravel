<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MostrarUsuariosController extends Controller
{
    public function index(){
		$usuarios=User::all();
		return view("usuarios",compact("usuarios"));
	}
}