<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Admistrador de Archivos</title>
	<!--CSS------------------>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<link rel="stylesheet" href="./raw/css/b4/b4.css">
	<!--Icono--------->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
	<section class="contenedor">
		<!--Pagina Principal, donde se encuentra la imagen de fondo---------->
		<div class="pagina-principal">
			<!--phone-top-bar-screen--------->
			<div class="barra"></div>
			<!--Titulo------------->
			<div class="titulo">
				<h1>Administrador de archivos</h1>
				<p>Un lugar seguro para guardar tus archivos</p>
			</div>
			<!--btns---------------------->
			<div class="form-btns">
				<button class="s-btn">Ir</button>
			</div>
			<!--cancel-btn------------>
			<div class="cancelar">
				<a href="#"><i class="fas fa-times"></i></a>
			</div>
		</div>
		<!--Segunda pagina, donde se encuentra el formulario--------------->
		<div class="segunda-pagina">
			<form>
				<div class="row">
					<div class="col">
						<select id="inputState" class="form-control">
							<option selected>Sleccione una Categoria</option>
							<option>Programacion Logica</option>
							<option>Programacion wev</option>
							<option>Mean Stacj</option>
							<option>Matematicas Discretas</option>
						</select>
					</div>
					<div class="col">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">Seleccionar Archivo</label>
						</div>
					</div>
				</div>
				<button class="mt-5">Subir Archivo</button>
			</form>
		</div>
		<div class="container">
			<div class="row">
				<div class="col mt-3 text-center">
					<h3 style="color: #4e4e4e;">Registro de archivos</h3>
				</div>
			</div>
			<div class="row">
				<div class="col mt-4">
					<table class="table text-center">
						<thead class="thead-dark">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Nombre</th>
								<th scope="col">Categoria</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td class="archivo">Archivo1</td>
								<td>Otto</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td class="archivo">Archivo2</td>
								<td>Thornton</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td class="archivo">Archivo3</td>
								<td>the Bird</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>


	<!--Jquery------------>
	<script src="./raw/js/b4/b4.js"></script>
	<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
	<script type="text/javascript">
		$(document).on('click', '.s-btn', function() {
			$('.contenedor').addClass('active-sign-in').siblings('.contenedor')
		});
		$(document).ready(function() {
			$('.cancelar a').click(function() {
				$('.contenedor').removeClass('active-sign-in')
			})
		});
	</script>
</body>

</html>