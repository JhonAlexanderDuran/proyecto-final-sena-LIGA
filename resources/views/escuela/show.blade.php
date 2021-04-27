@extends('layouts.base')

@section('title', 'Cosultar Usuario')

@section('content')

	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-plus"></i> Consultar Deportista</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
			<li class="breadcrumb-item"><a href="{{url('escuela')}}">Escuela</a></li>
		    <li class="breadcrumb-item active">Consultar Deportista</li>
		</ol>
		<table class="table table-striped table-hover" style="background-color: #fff">
			<tr>
				<th> Nombre Completo: </th>
				<td> {{ $escuela->name }} </td>
			</tr>
			<tr>
				<th> Documento: </th>
				<td> {{ $escuela->document }} </td>
			</tr>
			<tr>
				<th> Telefono: </th>
				<td> {{ $escuela->phonenumber }} </td>
			</tr>
			<tr>
				<th> Direccion: </th>
				<td> {{ $escuela->adress }} </td>
			</tr>
			<tr>
				<th> Acudiente: </th>
				<td> {{ $escuela->manager }} </td>
			</tr>
			<tr>
				<th> RH: </th>
				<td> {{ $escuela->rh }} </td>
			</tr>
			<tr>
				<th> EPS: </th>
				<td> {{ $escuela->eps }} </td>
			</tr>
			<?php
				\Carbon\Carbon::setLocale(config('app.locale'));
				$hoy = \Carbon\Carbon::now();
				$fna = \Carbon\Carbon::parse($escuela->created_at);
				$fn = \Carbon\Carbon::parse($escuela->birthdate);
				$fnu = \Carbon\Carbon::parse($escuela->updated_at);
			?>
			<tr>
				<th> Fecha de Nacimiento: </th>
				<td> {{ $escuela->birthdate }}  / ({{ $fn->diffInYears($hoy) }} años) </td>
			</tr>
			<tr>
				<th> Nivel: </th>
				<td> {{ $escuela->category }} </td>
			</tr>

			<tr>
				<th> Foto: </th>
				<td> <img src="{{ asset($escuela->photo) }}" style="cursor: zoom-in;" width="40px"> </td>
			</tr>
			<tr>
				<th> Observacion: </th>
				<td> {{ $escuela->observation }} </td>
			</tr>
			<tr>
				<th> Creado: </th>
				<td> {{ $fna->diffForHumans($hoy)}} </td>
			</tr>
			<tr>
				<th> Actualizado: </th>
				<td> {{ $fnu->diffForHumans($hoy)}} </td>
			</tr>
		</table>
	</div>

@endsection
