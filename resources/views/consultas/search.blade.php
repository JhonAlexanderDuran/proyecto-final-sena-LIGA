@extends('layouts.base')

@section('title', 'Modulo de consultas')

@section('content')
	<div class="col-md-10 offset-1">
		<h1 class="text-center"><i class="fa fa-search"></i> Consultar</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
			<li class="breadcrumb-item active" aria-current="page">Consultar</li>
		</ol>
		<a href="{{ url('deportistas/create')}}" class="btn btn-success">
			<i class="fa fa-plus"></i> Deportista
		</a>
		<form class="form-inline" action=" {{ url('consultas/search') }}">
			<div class="form-group col-md-10 offset-1">
				<select class="form-control" name="name">
					<option selected>Seleccione Club</option>
					@foreach ($clubs as $club)
						<option value="{{ $club->name }}"> {{ $club->name }} </option>
					@endforeach
				</select>
				&nbsp;
				<div class="form-group">
					<button type="submit" class="btn btn-outline-primary"> <i class="fa fa-search"></i> </button>
				</div>
				&nbsp;
				
			</div>
			<br><br>
		</form>
		<br>
		<table class="table table-striped table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th> Nombre Completo </th>
					<th> Documento </th>
					<th> Numero Telefonico </th>
					<th> Estado </th>
					<th> Foto </th>
					<th> Acciones </th>
				</tr>
			</thead>
			<tbody>
				@forelse($clubconsult->deports as $deport)
					<tr>
						<td> {{$deport->name}} </td>
						<td> {{$deport->document}} </td>
						<td> {{$deport->phonenumber}} </td>
						<td>
							@if ($deport->state == 'Activo')
								<span class="badge badge-success"> Activo </span>
							@elseif ($deport->state == 'Inactivo')
								<span class="badge badge-danger"> Inactivo </span>
							@endif
						</td>
						<td><img src=" {{ asset($deport->photo) }}" width="50"> </td>
						<td>
							<a href="{{url('deportistas/'.$deport->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
							<a href="{{url('deportistas/'.$deport->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<form action="{{url('deportistas/'.$deport->id)}}" method="post" style="display: inline">
								{!! csrf_field() !!}
								{!! method_field('delete') !!}
								<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash-alt"></i></button>
							</form>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="6">No Hay Registro</td>
					</tr>
				@endforelse
			</tbody>
		</table><br><br><br><br>
	</div>
@endsection
