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
	<br>
	<br>
	<br>
	<br>
	<br><br><br><br><br>
	</div>

@endsection
