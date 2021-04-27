@extends('layouts.base')

@section('title', 'Modulo de Escuela')

@section('content')
	<div class="col-md-10 offset-1">
		<h1 class="text-center"><i class="fa fa-users"></i> Lista de Deportistas Escuela</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Escuela</li>
		</ol>
		@if(Auth::user()->role == 'Admin')
			<a href="{{ url('escuela/create')}}" class="btn btn-success">
				<i class="fa fa-plus"></i> Deportista
			</a>
		@endif
		{{--  <a href="{{ url('escuela/pdf') }}" class="btn btn-outline-danger">
			<i class="fa fa-file-pdf"> Exportar</i>
		</a>
		<a href="{{ url('escuela/excel') }}" class="btn btn-outline-success">
			<i class="fa fa-file-excel"> Exportar</i>
		</a>  --}}
		<br>
		<table class="table table-striped table-hover text-center dataTable">
			<thead class="thead-dark">
				<tr>
					<th> Nombre Completo </th>
					<th> Documento </th>
					<th> Foto </th>
					<th> Acciones </th>
				</tr>
			</thead>
			<tbody class="results">
				@foreach($escuelas as $escuela)
				<tr>
					<td> {{$escuela->name}} </td>
					<td> {{$escuela->document}} </td>
					<td> <img src="{{asset($escuela->photo)}}" width="50"> </td>
					<td>
						@if(Auth::user()->role == 'Admin')
							<a href="{{url('escuela/'.$escuela->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
							<a href="{{url('escuela/'.$escuela->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<a href="{{url('escuela/'.$escuela->id.'/payments')}}" class="btn btn-outline-primary"> <i class="fas fa-dollar-sign"></i></a>
							<a href="{{url('escuela/'.$escuela->id.'/assistance')}}" class="btn btn-outline-primary"> <i class="fas fa-calendar-alt"></i></a>
							<form action="{{url('escuela/'.$escuela->id)}}" method="post" style="display: inline">
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
