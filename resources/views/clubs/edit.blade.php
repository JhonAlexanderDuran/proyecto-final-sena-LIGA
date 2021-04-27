@extends('layouts.base')

@section('title', 'Editar Club')

@section('content') 
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Editar Clubs</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('clubs')}}">Lista de Clubs</a></li>
		    <li class="breadcrumb-item active">Editar Club</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('clubs/'.$club->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{{ method_field('PUT')}}

			<div class="form-group">
				<input type="hidden" name="id" value="{{ $club->id}}">
				<label for="name">Nombre del Club: </label>
				<input type="text" id="name" name="name" class="form-control" placeholder="Nombre Club" value="{{$club->name}}" >
			</div>

			<div class="form-group">
				<label for="nit">Número de N.I.T. </label>
				<input type="text" id="nit" name="nit" class="form-control" placeholder="N.I.T" value="{{$club->nit}}" >
			</div>

			<div class="form-group">
				<label for="city">Ciudad: </label>
				<input type="text" id="city" name="city" class="form-control" placeholder="Ciudad" value="{{$club->city}}" >
			</div>

			<div class="form-group">
				<label for="phonenumber">Número Teléfonico: </label>
				<input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Numero Telefonico" value="{{$club->phonenumber}}" >
			</div>

			<div class="form-group">
				<label for="user_id">Encargado: </label>
                <select class="form-control" id="user_id" name="user_id">
                    <option value="">Seleccione Usuario</option>
                    @foreach($user as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $club->user_id ? 'selected' : '' }}> {{ $user->name }} </option>
                    @endforeach
                </select>
            </div>

			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Modificar</button>
			</div>
		</form>
	</div>
@endsection
