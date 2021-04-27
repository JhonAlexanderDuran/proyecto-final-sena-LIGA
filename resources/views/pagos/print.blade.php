<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
	<table border="1" style="margin: 10px auto">
		<thead>
			<tr>
				<th class="text-center"><img src="{{ asset('imgs/logo.png')}}" width="100px"></th>
				<th class="text-center" style="font-size: 15px">
					UNIDAD DEPORTIVA
					<br>
					PALOGRANDE-PATINODROMO
					<br>
					TELEFAX: 8812970
					<br>
					NIT: 800.007.072-4
				</th>
				<th colspan="2" class="text-center">
					<label for="caja">RECIBO DE CAJA #</label> &nbsp;&nbsp;&nbsp; <input type="text" id="caja" style="border: none; color: red; text-align: center;" size="15">
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<label for="nombre"><strong>NOMBRE:</strong></label> &nbsp; &nbsp; &nbsp; &nbsp; <input id="nombre" type="text" style="border: none" size="45" value="{{ $pago->escuela->name }}"> <label for="documento"><strong>DOCUMENTO:</strong> &nbsp; &nbsp;</label> <input id="documento" type="text" style="border: none" size="15" value="{{ $pago->escuela->document }}">
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<label for="ciudad"><strong>CIUDAD:</strong></label>&nbsp;&nbsp;&nbsp;<input type="text" id="ciudad" style="border: none" size="15" value="MANIZALES">&nbsp;&nbsp; <label for="fecha"><strong>FECHA:</strong></label>&nbsp; <input type="text" id="fecha" style="border: none" size="25" value="{{ $pago->payment }}">
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<label for="recibo"><strong>RECIBO DE:</strong></label>&nbsp;&nbsp; <input type="text" id="recibo" style="border: none" size="60" value="{{ $pago->value }}">
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<label for="direccion"><strong>DIRECCION: </strong></label>&nbsp;&nbsp; <input type="text" id="direccion" style="border: none" size="85">
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<label for="suma"><strong>LA SUMA DE (EN LETRAS):</strong></label>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<input type="text" id="suma" style="border: none" size="95">
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<label for="concepto"><strong>POR CONCEPTO DE:</strong></label>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<input type="text" id="concepto" style="border: none" size="95" value="{{ $pago->concept }}">
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;&nbsp;<input type="text" style="border: none" size="95">
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;<label for="efectivo"><strong>EFECTIVO</strong></label> <input type="checkbox" id="efectivo"></td>
				<td><label for="cheque"><strong>CHEQUE # </strong></label>&nbsp; <input type="text" id="cheque" style="border: none" size="15"></td>
				<td><label for="banco"><strong>BANCO </strong></label>&nbsp;<input type="text" id="banco" style="border: none" size="15"></td>
				<td><label for="sucursal"><strong>SUCURSAL</strong> </label>&nbsp;<input type="text" id="sucursal" style="border: none" size="15"></td>
			</tr>
			<tr>
				<td>CODIGO</td>
				<td>DEBITOS</td>
				<td>CREDITOS  &nbsp; &nbsp; &nbsp; &nbsp;</td>
				<td rowspan="4" class="text-center" style="text-decoration: underline;">FIRMA Y SELLO</td>
			</tr>
			<tr>
				<td><input type="text" style="border: none" size="15"></td>
				<td><input type="text" style="border: none" size="25"></td>
				<td><input type="text" style="border: none" size="22"></td>
			</tr>
			<tr>
				<td><input type="text" style="border: none" size="15"></td>
				<td><input type="text" style="border: none" size="25"></td>
				<td><input type="text" style="border: none" size="22"></td>
			</tr>
			<tr>
				<td><input type="text" style="border: none" size="15"></td>
				<td><input type="text" style="border: none" size="25"></td>
				<td><input type="text" style="border: none" size="22"></td>
			</tr>
		</tbody>
	</table>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert2"></script>
</body>
</html>
