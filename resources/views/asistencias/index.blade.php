@extends('layouts.base')

@section('title', 'Modulo de asistencia')

@section('content')
	<div class="col-md-8 offset-2">
		<h1 class="text-center"><i class="fa fa-users"></i> Lista de Asistencias</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
			<li class="breadcrumb-item"><a href="{{url('escuela')}}">Escuela</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Asistencia</li>
		</ol>
		@if(Auth::user()->role == 'Admin')
			<a href="{{ url('escuela/'.$escuela->id.'/asistent/create')}}" class="btn btn-success">
				<i class="fa fa-plus"></i> Asistencias
			</a>
		@endif
		<hr>
		<table class="table table-striped table-hover text-center dataTable">
			<thead class="thead-dark">
				<tr>
					<th> Mes </th>
					<th> Asistencias </th>
					<th> Acciones </th>
				</tr>
			</thead>
			<tbody class="results">
				@foreach($escuela->asistencias as $asistencia)
				<tr>
					<td> {{$asistencia->month}} </td>
					<td> {{$asistencia->asistent}} </td>
					<td>
						@if(Auth::user()->role == 'Admin')
							<a href="{{url('asistencias/'.$asistencia->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<form action="{{url('asistencias/'.$asistencia->id)}}" method="post" style="display: inline">
								{!! csrf_field() !!}
								{!! method_field('delete') !!}
								<button class="btn btn-outline-danger btn-delete"><i class="fa fa-trash-alt" type="button"></i></button>
							</form>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
