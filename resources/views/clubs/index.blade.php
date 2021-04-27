@extends('layouts.base')

@section('title', 'Modulo de Clubs')

@section('content')
	<div class="col-md-10 offset-1">
		<h1 class="text-center"><i class="fa fa-users"></i> Lista de Clubs</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Club</li>
		</ol>
		@if(Auth::user()->role == 'Admin')
			<a href="{{ url('clubs/create')}}" class="btn btn-success">
				<i class="fa fa-plus"></i> CLUB
			</a>
		@endif
		{{--  <a href="{{ url('clubs/pdf') }}" class="btn btn-outline-primary">
			<i class="fa fa-file-pdf"> Exportar</i>
		</a>  --}}
		<hr>
		<table class="table table-striped table-hover text-center dataTable">
			<thead class="thead-dark">
				<tr>
					<th> Nombre </th>
					<th> NIT </th>
					<th> Responsable </th>
					<th> Ciudad </th>
					<th> Numero Telefonico </th>
					<th> Acciones </th>
				</tr>
			</thead>
			<tbody class="results">
				@foreach($clubs as $club)
				<tr>
					<td> {{$club->name}} </td>
					<td> {{$club->nit}} </td>
					<td> {{$club->user->name}} </td>
					<td> {{$club->city}} </td>
					<td> {{$club->phonenumber}} </td>
					<td>
						@if(Auth::user()->role == 'Admin')
							<a href="{{url('clubs/'.$club->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<form action="{{url('clubs/'.$club->id)}}" method="post" style="display: inline">
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
