@extends('layouts.base')

@section('title', 'Editar Deportistas')

@section('content')
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Editar Deportistas</h1>
		<hr>
		@if(Auth::user()->role=='Admin')
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('consultas')}}">Lista de Deportistas</a></li>
			    <li class="breadcrumb-item active">Editar Deportista</li>
			</ol>
		@endif
		@include('layouts.validation_errors')
		<form action="{{url('deportistas/'.$deportista->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{{ method_field('PUT')}}

			<div class="form-group">
				<label for="codigo">Número de Competencia: </label>
				<input type="number" id="codigo" name="codigo" class="form-control" placeholder="Numero Competencia" value="{{$deportista->codigo}}" >
			</div>

			<div class="form-group">
				<label for="name">Nombre Completo:</label>
				<input type="hidden" name="id" value="{{ $deportista->id}}">
				<input type="text" id="name" name="name" class="form-control" placeholder="Nombre Completo" value="{{$deportista->name}}" >
			</div>

			<div class="form-group">
				<label for="document">Número de Documento:</label>
				<input type="text" id="document" name="document" class="form-control" placeholder="Documento" value="{{$deportista->document}}" >
			</div>

			<div class="form-group">
				<label for="phonenumber">Número de Teléfonico:</label>
				<input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Numero Telefonico" value="{{$deportista->phonenumber}}" >
			</div>

			<div class="form-group">
				<label for="rh">RH:</label>
				<input type="text" id="rh" name="rh" class="form-control" placeholder="RH" value="{{$deportista->rh}}" >
			</div>

			<div class="form-group">
				<label for="manager">Acudiente:</label>
				<input type="text" id="manager" name="manager" class="form-control" placeholder="Acudiente" value="{{$deportista->manager}}" >
			</div>


			<div class="form-group">
				<label for="eps">E.P.S</label>
				<input type="text" id="eps" name="eps" class="form-control" placeholder="EPS" value="{{$deportista->eps}}" >
			</div>

			<div class="form-group">
				<label for="category">Nivel del Competidor:</label>
				<select class="form-control" id="category" name="category">
					<option value="">Seleccione Nivel</option>
					<option value="0"{{$deportista->category== '0' ? 'selected' : '' }}>0</option>
					<option value="1"{{$deportista->category== '1' ? 'selected' : '' }}>1</option>
					<option value="2"{{$deportista->category== '2' ? 'selected' : '' }}>2</option>
					<option value="3"{{$deportista->category== '3' ? 'selected' : '' }}>3</option>
					<option value="4"{{$deportista->category== '4' ? 'selected' : '' }}>4</option>
					<option value="5"{{$deportista->category== '5' ? 'selected' : '' }}>5</option>
					<option value="6"{{$deportista->category== '6' ? 'selected' : '' }}>6</option>
				</select>
			</div>

			<div class="form-group">
				<label for="state">Estado:</label>
				<select class="form-control" id="state" name="state">
					<option value="">Seleccione Estado</option>
					<option value="Activo"{{$deportista->state== 'Activo' ? 'selected' : '' }}>Activo</option>
					<option value="Inactivo"{{$deportista->state== 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
				</select>
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
