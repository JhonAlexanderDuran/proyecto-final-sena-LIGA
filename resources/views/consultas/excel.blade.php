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
				<th>Numero Telefonico</th>
				<th>RH</th>
				<th>Responsable</th>
				<th>EPS</th>
				<th>Nivel</th>
				<th>Estado</th>
			</tr>
		</thead>
		@foreach($clubconsult->deports as $deport)
		<tbody>
			<tr>
				<td>{{ $deport->id }}</td>
				<td>{{ $deport->name }}</td>
				<td>{{ $deport->document }}</td>
				<td>{{ $deport->phonenumber }}</td>
				<td>{{ $deport->rh }}</td>
				<td>{{ $deport->manager }}</td>
				<td>{{ $deport->eps }}</td>
				<td>{{ $deport->category }}</td>
				<td>{{ $deport->state }}</td>
			</tr>
		</tbody>
		@endforeach
	</table>
</body>
</html>