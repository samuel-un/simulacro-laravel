<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosValidaController extends Controller
{
    public function store(Request $request){
		$validado=$request->validate([
			'name'=>'required|string|max:20',
			'email'=> 'required|email|unique:users,email',
		]);
		User::create($validado);
		return ("El usuario se ha creado correctamente");
	}
}