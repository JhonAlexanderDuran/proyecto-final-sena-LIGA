<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Excel</title>
	<style>
		body{
			font-family: Helvatica;
		}
		table {
			border-collapse: collapse;
		}
		table th,
		table td {
			
		}
		table th{
			background-color: gray;
			color: #fff;
			text-align: center;
			padding: 10px;
		}
		table td {
			border: 1px solid silver;
			padding: 10px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Completo</th>
				<th>Documento</th>
				<th>Nivel</th>
				<th>Enero</th>
				<th>Febrero</th>
				<th>Marzo</th>
				<th>Abril</th>
				<th>Mayo</th>
				<th>Junio</th>
				<th>Julio</th>
				<th>Agosto</th>
				<th>Septiembre</th>
				<th>Octubre</th>
				<th>Noviembre</th>
				<th>Diciembre</th>
			</tr>
		</thead>
		@foreach($escuelas as $escuela)
		<tbody>
			<tr>
				<td>{{ $escuela->id }}</td>
				<td>{{ $escuela->name }}</td>
				<td>{{ $escuela->document }}</td>
				<td>{{ $escuela->category }}</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Enero')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Febrero')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Marzo')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Abril')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Mayo')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Junio')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Julio')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Agosto')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Septiembre')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Octubre')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Noviembre')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
				<td>
					@foreach($escuela->asistencias as $asistencia)
						@if($asistencia->month == 'Diciembre')
							{{ $asistencia->asistent }}
						@endif
					@endforeach
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
</body>
</html>