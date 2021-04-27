@extends('layouts.base')

@section('title', 'Modulo de Usuarios')

@section('content')
	<div class="col-md-10 offset-1">
		<h1 class="text-center"><i class="fa fa-users"></i> Lista de Usuarios</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('home')}}">Escritorio</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Usuario</li>
		</ol>
		@if(Auth::user()->role == 'Admin')
			<a href="{{ url('user/create')}}" class="btn btn-success">
				<i class="fa fa-plus"></i> Usuario
			</a>
		@endif
		<br>
		<table class="table table-striped table-hover text-center dataTable">
			<thead class="thead-dark">
				<tr>
					<th> Nombre Completo </th>
					<th> Documento </th>
					<th> Correo Electrónico </th>
					<th> Numero Telefonico </th>
					<th> Rol </th>
					<th> Acciones </th>
				</tr>
			</thead>
			<tbody class="results">
				@foreach($users as $user)
				<tr>
					<td> {{$user->name}} </td>
					<td> {{$user->document}} </td>
					<td> {{$user->email}} </td>
					<td> {{$user->phonenumber}} </td>
					<td>
						@if ($user->role == 'Admin')
							<span class="badge badge-success"> Administrador </span>
						@elseif($user->role == 'Club')
							<span class="badge badge-warning"> Club </span>
						@endif
					</td>
					<td>
						@if(Auth::user()->role == 'Admin')
							<a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<form action="{{url('user/'.$user->id)}}" method="post" style="display: inline">
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
