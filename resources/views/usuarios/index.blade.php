@extends('main')

@section('title')
Usuarios
@endsection


@section('contenido')

<div class="container">
	<br>
	<div class="row">
				<h1>
			<i class="fas fa-child fa-1x" color="#1E90FF"></i>  Usuarios        <a href="{{ route("usuarios.create") }} " class="btn btn-success btn-sm"><i class="fas fa-plus"></i>  Nuevo</a>
		</h1>

	</div>

	<br>
	@include('flash::message')
	<br>
		<div class="container">		
			<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Codigo</th>
				      <th scope="col">Email</th>
				      <th scope="col">Password</th>
				      <th scope="col">Opciones</th>      
				    </tr>
				  </thead>
				  <tbody>   
				  	<!--foreach para que traia los datos de la bd y los cargue en fila-->
						@foreach($tablausuarios as $usuario)
						 	<tr>
						      <th scope="row">{{ $usuario->Idusuario }}</th>
						      <td>{{ $usuario->Email }}</td>
						      <td>{{ $usuario->Password }}</td>
						      <td><a href="{{ URL::to('admin/usuarios/' . $usuario->Idusuario  . '/edit') }}"><i class="far fa-edit"></i></a>  |  <a href="#" data-toggle="modal" data-target="#modaleliminar{{ $usuario->Idusuario }}"><i class="far fa-trash-alt" color="#1E90FF"></i></a>

										<!-- codigo del modal para eliminar comfirmacion-->
										<!-- trucopara que funcione el modal es que se crea un modal por cada item al final identificarlos con el ID-->
											<div class="modal fade" id="modaleliminar{{ $usuario->Idusuario }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


						      </td>




						  	</tr>
						@endforeach
				  </tbody>
			</table>
		</div>	
</div>



	










@endsection


<!--sCRIPT PARA ICONOS -->


<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>