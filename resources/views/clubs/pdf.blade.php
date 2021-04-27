<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> Reporte PDF</title>
	<style>
		body{
			font-family: Helivatcia;
		}
		table{
			border-collapse: collapse;
		}
		table th,
		table td{
			font-size: 14px !important;
		}
		table th{
			background-color: gray;
			color: white;
			text-align: center;
			padding: 10px;
		}
		table td{
			border: 1px solid silver;
			padding: 10px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td> Id </td>
				<td> Nombre Completo </td>
				<td> N.I.T </td>
				<td> Ciudad </td>
				<td> Telefono </td>
				<td> Responsable </td>
			</tr>
		</thead>
		@foreach($club as $club)
			<tr>
				<td> {{ $club->id }} </td>
				<td> {{ $club->name }} </td>
				<td> {{ $club->nit }} </td>
				<td> {{ $club->city }} </td>
				<td> {{ $club->phonenumber }} </td>
				<td> {{ $club->user->name }} </td>
			</tr>
		@endforeach
	</table>
</body>
</html>