@extends('main')

@section('title')
Nuevo usuario
@endsection


@section('contenido')

<div class="container col-md-12">
	<br>

	<h1>Nuevo Usuario</h1>
	<br>


<div class="col-md-3">



	{!! Form::open(['route'=>'usuarios.store', 'method' => 'POST']) !!}


	<div class="Form-group">
		{!! Form::label('Email', 'Email | Usuario') !!}
		{!! Form::Email('Email', null, ['Class'=> 'form-control', 'placeholder' => 'Ingresa el Email', 'required' => '', 'aria-describedby' => 'emailHelp']) !!}
		<small id="emailHelp" class="form-text text-muted">No compartiremos tus datos con otras empresas</small>
	</div>

		<div class="Form-group">
		{!! Form::label('Password', 'Password') !!}
		{!! Form::Password('Password', ['Class'=> 'form-control', 'placeholder' => 'Ingresa el password', 'required' => '']) !!}		
	</div>
	<br>
  <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
  <a href="{{ URL::to('admin/usuarios') }}" class="btn btn-success btn-sm"><i class="fas fa-undo"></i>  Regresar</a> 

{!! form::close() !!}




</div>





</div>


@endsection




