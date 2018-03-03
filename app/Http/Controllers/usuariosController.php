<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class usuariosController extends Controller
{
    //

	public function index()
	{
		//El reconoce a usuarios como la table porque alprincipio le colocamos que trabajra con ese modelo
		$tablausuarios = usuario::all();


		return view('usuarios.index')->with('tablausuarios', $tablausuarios);
	}


	//Es par aun nuevo usuario FORMULARIO
		public function create()
	{


		return view('usuarios.create');
	}

	//Es para guardar los datos del formulario de CREATE 
	public function store(request $nuevousuario)
	{	
		//esta parte es solo para que encrpte la contraseña si no se necesita omitir esta linea en otros copy
		$nuevousuario->password = encrypt($nuevousuario->password);

		//cramos una nueva variable del tipo ""Usuario"" Tener en cuenta que se debe declarar al principio el modelo 
		// con el cual vamos a trabajr ejemplo App\usuario;	
		$user = new usuario($nuevousuario->all());
				
		//guarda el usuario nuevo
		$user->save();
		
		//manda un mensjae a traves de un paquete de laravel //Falta validarlo cuando mandar y cuando no
		Flash::success('¡Usuario: ' . $user->Email . ' creado con exito!');


		//retorna ala pagina principal de los usuarios
		return redirect($to = 'admin/usuarios');
	}


	//Es el que muestra un detalle en especifico
		public function show($id)
	{

		return view('usuarios.show');
	}


	//para ediar algun usuario FORMULARIO
		public function edit($id)
	{	
		//variable usuario es igual a buscar en el modelo usuario el id que sea igual al id que nos enviaron
		$usuario = usuario::find($id);


		//enviar hacia usuarios con los datos del usuario
		return view('usuarios.edit')->with('usuario', $usuario);
	}




	//para guardar los cambios del formulario del edit // actualizar la informacion y guardar en la bd
		public function update(request $request, $id)
	{

		$usuario = usuario::find($id);
		
		$usuario->Email = $request->Email;
		$usuario->Password = $request->Password;
		$usuario->save();
		


		

		return redirect($to = 'admin/usuarios');
	}


	//Para eliminar un Modelo usuario etc
		public function destroy($id)
	{

		$usuario = usuario::find($id);
		$usuario->delete();
		

		Flash::warning('El usuario: ' . $usuario->Email . ' ha sido eliminado!');
		
		return redirect($to = 'admin/usuarios');
	}








}
