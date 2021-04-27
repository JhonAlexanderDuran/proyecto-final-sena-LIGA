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
				<td> Documento </td>
				<td> Telefono </td>
				<td> Direccion </td>
				<td> Acudiente </td>
				<td> RH </td>
				<td> EPS </td>
				<td> Categoria </td>
			</tr>
		</thead>
		@foreach($escuela as $escuela)
			<tr>
				<td> {{ $escuela->id }} </td>
				<td> {{ $escuela->name }} </td>
				<td> {{ $escuela->document }} </td>
				<td> {{ $escuela->phonenumber }} </td>
				<td> {{ $escuela->adress }} </td>
				<td> {{ $escuela->manager }} </td>
				<td> {{ $escuela->rh }} </td>
				<td> {{ $escuela->eps }} </td>
				<td> {{ $escuela->category }} </td>
			</tr>
		@endforeach
	</table>
</body>
</html>