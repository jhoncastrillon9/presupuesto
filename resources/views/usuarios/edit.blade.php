@extends('main')

@section('title')
Edit
@endsection


@section('contenido')

<div class="container col-md-11">
	<br>

	<h1>Actualizar Usuario</h1>
	<br>

	<div class="col-md-3">
		

	{{ Form::model($usuario, array('route' => array('usuarios.update', $usuario), 'method' => 'PUT')) }}


	<div class="Form-group">
		{!! Form::label('Email', 'Email | Usuario') !!}
		{!! Form::Email('Email', null, ['Class'=> 'form-control', 'placeholder' => 'Ingresa el Email', 'required' => '']) !!}

	</div>

		<div class="Form-group">
		{!! Form::label('Password', 'Password') !!}
		{!! Form::Password('Password', ['Class'=> 'form-control', 'placeholder' => 'Ingresa el password', 'required' => '']) !!}		
	</div>
	<br>
  <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sync"></i>  Actualizar</button>   
  <a href="{{ URL::to('admin/usuarios') }}" class="btn btn-success btn-sm"><i class="fas fa-undo"></i>  Regresar</a> 
  <a href="#" data-toggle="modal" data-target="#modaleliminar" class="btn btn-danger btn-sm"><i class="far fa-trash-alt" color="#white"></i>Eliminar</a>



{!! form::close() !!}



	</div>
</div>

										<!-- codigo del modal para eliminar comfirmacion-->
										<!-- trucopara que funcione el modal es que se crea un modal por cada item al final identificarlos con el ID-->
											<div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        ¿Esta seguro de eliminar el usuario: {{ $usuario->Email }} ?
											      </div>
											      <div class="modal-footer">
											      	<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancelar</button>
											      	<a href="{{ URL::to('admin/usuarios/' . $usuario->Idusuario . '/destroy') }}" class="btn btn-danger btn-sm">Eliminar</a>											        
											        
											      </div>
											    </div>
											  </div>
											</div>


@endsection


<!--sCRIPT PARA ICONOS -->


<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

