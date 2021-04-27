@extends('layouts.base')

@section('title', 'Modulo de consultas')

@section('content')
	<div class="col-md-10 offset-1">
		<h1 class="text-center"><i class="fa fa-search"></i> Consultar</h1>
		<hr>
		<a href="{{ url('deportistas/create')}}" class="btn btn-success">
			<i class="fa fa-plus"></i> Deportista
		</a>
		<br>
		<br>
		<table class="table table-striped table-hover text-center dataTable">
				<thead class="thead-dark">
					<tr>
						<th> Numero Compentencia </th>
						<th> Nombre Completo </th>
						<th> Documento </th>
						<th> Estado </th>
						<th> Foto </th>
						<th> Acciones </th>
					</tr>
				</thead>
				<tbody>
					@if (Auth::user()->clubs)
						@forelse(Auth::user()->clubs->deports as $deport)
							<tr>
								<td> {{$deport->codigo}} </td>
								<td> {{$deport->name}} </td>
								<td> {{$deport->document}} </td>
								<td>
									@if ($deport->state == 'activo')
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

					@endif
				</tbody>
		</table><br><br><br><br>

	</div>

@endsection
