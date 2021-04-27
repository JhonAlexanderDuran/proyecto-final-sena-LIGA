@extends('layouts.base')

@section('title', 'Editar Deportistas')

@section('content')
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Editar Deportista</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
			<li class="breadcrumb-item"><a href="{{url('escuela')}}">Escuela</a></li>
		    <li class="breadcrumb-item active">Editar Deportista</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('escuela/'.$escuela->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{{ method_field('PUT')}}

			<div class="form-group">
				<input type="hidden" name="id" value="{{ $escuela->id}}">
				<label for="name">Nombre Completo:</label>
				<input type="text" id="name" name="name" class="form-control" placeholder="Nombre Completo" value="{{$escuela->name}}" >
			</div>

			<div class="form-group">
				<label for="document">Documento:</label>
				<input type="text" id="document" name="document" class="form-control" placeholder="Documento" value="{{$escuela->document}}" >
			</div>

			<div class="form-group">
				<label for="phonenumber">Número Teléfonico:</label>
				<input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Numero Telefonico" value="{{$escuela->phonenumber}}" >
			</div>

			<div class="form-group">
				<label for="adress">Dirección:</label>
				<input type="text" id="adress" name="adress" class="form-control" placeholder="Direccion" value="{{$escuela->adress}}" >
			</div>

			<div class="form-group">
				<label for="manager">Acudiente:</label>
				<input type="text" id="manager" name="manager" class="form-control" placeholder="Acudiente" value="{{$escuela->manager}}" >
			</div>

			<div class="form-group">
				<label for="rh">RH:</label>
				<input type="text" id="rh" name="rh" class="form-control" placeholder="RH" value="{{$escuela->rh}}" >
			</div>

			<div class="form-group">
				<label for="eps">E.P.S:</label>
				<input type="text" id="eps" name="eps" class="form-control" placeholder="EPS" value="{{$escuela->eps}}" >
			</div>

			<div class="form-group">
				<label for="birthdate">Fecha Nacimiento</label>
				<input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="Fecha Nacimiento" value="{{$escuela->birthdate}}" >
			</div>

			<div class="form-group">
				<label for="category">Nivel del deportista:</label>
				<select class="form-control" name="category" id="category">
					<option value="">Seleccione Nivel</option>
					<option value="0"{{$escuela->category== '0' ? 'selected' : '' }}>0</option>
					<option value="1"{{$escuela->category== '1' ? 'selected' : '' }}>1</option>
					<option value="2"{{$escuela->category== '2' ? 'selected' : '' }}>2</option>
					<option value="3"{{$escuela->category== '3' ? 'selected' : '' }}>3</option>
					<option value="4"{{$escuela->category== '4' ? 'selected' : '' }}>4</option>
					<option value="5"{{$escuela->category== '5' ? 'selected' : '' }}>5</option>
					<option value="6"{{$escuela->category== '6' ? 'selected' : '' }}>6</option>
				</select>
			</div>

			<div class="form-group">
				<label for="observation">Observaciones:</label>
				<input type="text" id="observation" name="observation" class="form-control" placeholder="Observacion" value="{{$escuela->observation}}" >
			</div>

			<div class="form-group">
                <input type="file" class="form-control d-none" accept="image/*" name="photo">
                <button class="btn btn-outline-success btn-block btn-upload" type="button"><i class=" fa fa-upload"></i> Seleccione Foto</button>
            </div>

			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Modificar</button>
			</div>
		</form>
	</div>
@endsection
