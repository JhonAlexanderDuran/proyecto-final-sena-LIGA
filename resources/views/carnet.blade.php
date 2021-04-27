<!DOCTYPE html>
<html>
<head>
	<title>Formulario HTML</title>
	<meta charset="=utf8">
	<link rel="stylesheet" href="{{ asset('css/liga2.css') }}">
</head>
<body>
	<main id="carnet">
	
		<section id="logo">
			<img src="{{ asset('imgs/logo.png') }}" style="width: 250px">
		</section>
		<div class="foto" id="fileDisplayArea">
			
		</div>
		<section id="info">	
			<div>
				<label><strong>Nombre</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text">
				</label>
			</div>
			<div>
				<label><strong>Apellido</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text">
				</label>
			</div>
			<div>
				<label><strong>Documento</strong>
					<input type="text">
				</label>
			</div>
			<div>
				<label><strong>RH</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text">
				</label>
			</div>
			<div>
				<label><strong>Club</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text">
				</label>
			</div>
			<div>
				<label><strong>Deporte</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text">
				</label>
			</div>
		</section>	
	</main>

	<input type="file" id="fileInput">	

	<script>
		window.onload = function() {

		var fileInput = document.getElementById('fileInput');
		var fileDisplayArea = document.getElementById('fileDisplayArea');


		fileInput.addEventListener('change', function(e) {
			var file = fileInput.files[0];
			var imageType = /image.*/;

			if (file.type.match(imageType)) {
				var reader = new FileReader();

				reader.onload = function(e) {
					fileDisplayArea.innerHTML = "";

					var img = new Image();
					img.src = reader.result;


					fileDisplayArea.appendChild(img);
				}

				reader.readAsDataURL(file);	
			} else {
				fileDisplayArea.innerHTML = "File not supported!"
			}
		});

		}
	</script>
	
</body>
</html>
