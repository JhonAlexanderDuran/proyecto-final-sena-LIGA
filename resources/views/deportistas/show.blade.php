@extends('layouts.base')

@section('title', 'Cosultar Deportista_Liga')

@section('content')

	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-plus"></i> Consultar Deportistas Liga</h1>
		<hr>
		@if(Auth::user()->role=='Admin')
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('consultas')}}">Lista de Deportistas Liga</a></li>
			    <li class="breadcrumb-item active">Consultar Deportistas Liga</li>
			</ol>
		@endif
		<table class="table table-striped table-hover" style="background-color: #fff">
			<tr>
				<th> Numero Competencia: </th>
				<td> {{ $deportista->codigo }} </td>
			</tr>
			<tr>
				<th> Nombre Completo: </th>
				<td> {{ $deportista->name }} </td>
			</tr>
			<tr>
				<th> Documento: </th>
				<td> {{ $deportista->document }} </td>
			</tr>
			<tr>
				<th> Telefono: </th>
				<td> {{ $deportista->phonenumber }} </td>
			</tr>
			<tr>
				<th> RH: </th>
				<td> {{ $deportista->rh }} </td>
			</tr>
			<tr>
				<th> Acudiente: </th>
				<td> {{ $deportista->manager }} </td>
			</tr>
			<tr>
				<th> EPS: </th>
				<td> {{ $deportista->eps }} </td>
			</tr>

			<tr>
				<th> Nivel: </th>
				<td> {{ $deportista->category }} </td>
			</tr>

			<tr>
				<th> Foto: </th>
				<td> <img src="{{ asset($deportista->photo) }}" style="cursor: zoom-in;" width="40px"> </td>
			</tr>
			<tr>
				<th> Estado: </th>
				<td> {{ $deportista->state }} </td>
			</tr>
			<?php
				\Carbon\Carbon::setLocale(config('app.locale'));
				$hoy = \Carbon\Carbon::now();
				$fna = \Carbon\Carbon::parse($deportista->created_at);
				$fnu = \Carbon\Carbon::parse($deportista->updated_at);
			?>
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
