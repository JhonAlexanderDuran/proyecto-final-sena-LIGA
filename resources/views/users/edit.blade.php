@extends('layouts.base')

@section('title', 'Editar Usuarios')

@section('content')
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Editar Usuarios</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('user')}}">Lista de Usuario</a></li>
		    <li class="breadcrumb-item active">Editar Usuario</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('user/'.$user->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{{ method_field('PUT')}}

			<div class="form-group">
				<input type="hidden" name="id" value="{{ $user->id}}">
				<label for="name">Nombre Completo:</label>
				<input type="text" id="name" name="name" class="form-control" placeholder="Nombre Completo" value="{{$user->name}}" >
			</div>

			<div class="form-group">
				<label for="email">Correo Electrónico:</label>
				<input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico" value="{{$user->email}}" >
			</div>

			<div class="form-group">
				<label for="role">Rol:</label>
				<select class="form-control" name="role" id="role" value="{{ $user->role }}">
					<option value=""> Seleccione Rol </option>
					<option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}> Administrador </option>
					<option value="Club" {{ $user->role == 'Club' ? 'selected' : '' }}> Club </option>
				</select>
			</div>

			<div class="form-group">
				<label for="phonenumber">Número Teléfonico:</label>
				<input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Rol" value="{{$user->phonenumber}}" >
			</div>

			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Modificar</button>
			</div>
		</form>
	</div>
@endsection
