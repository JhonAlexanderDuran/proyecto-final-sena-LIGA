@extends('layouts.base')

@section('title', 'Modulo de pago')

@section('content')
	<div class="col-md-10 offset-1">
		<h1 class="text-center"><i class="fa fa-users"></i> Lista de Pagos</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('escuela')}}">Escuela</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Pago</li>
		</ol>
		@if(Auth::user()->role == 'Admin')
			<a href="{{ url('escuela/'.$escuela->id.'/payments/create')}}" class="btn btn-success">
				<i class="fa fa-plus"></i> Pago
			</a>
		@endif
		<hr>
		<br>
		<table class="table table-striped table-hover text-center dataTable">
			<thead class="thead-dark">
				<tr>
					<th> Numero de Factura </th>
					<th> Fecha de pago </th>
					<th> Concepto </th>
					<th> Por Valor De </th>
					<th> Acciones </th>
				</tr>
			</thead>
			<tbody class="results">
				@foreach($pagos as $pago)
				<tr>
					<td> {{$pago->number}} </td>
					<td> {{$pago->payment}} </td>
					<td> {{$pago->concept}} </td>
					<td> {{$pago->value}} </td>
					<td>
						@if(Auth::user()->role == 'Admin')
							<a href="{{url('pagos/'.$pago->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<a href="{{url('pagos/'.$pago->id.'/print')}}" target="_blank" class="btn btn-outline-warning"> <i class="fas fa-print"></i></a>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
