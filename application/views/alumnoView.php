<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Utilizamos el base_url que configuramos en config.php para completar la ruta del archivo que queremos agregar -->
	<link rel="stylesheet" href="<?php echo base_url('props/bootstrap/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('props/bootstrap/iconos/iconos/iconos.css');?>">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Satisfy');
		@import url('https://fonts.googleapis.com/css?family=Montserrat');
	</style>

	<script src="<?php echo base_url('props/bootstrap/js/alumno.js');?>"></script>
</head>
<body>
	<div class="container col-md-8">
		
		<h4 class="modal-title" style="font-family: 'Satisfy', cursive; color: #a8834c;">-- Nuevo alumno --&nbsp<i class="fa fa-user" style="color: red"></i></h4>

		<form action="<?php echo base_url().'alumnoController/ingresar' ?>" method="POST" class="mx-auto" onsubmit="return validarFormulario()">
			<div class="row">
				<div class="col">
					<div class="input-group">
						<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Nombre</span>
						<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nombre" id="nombre">
					</div>
				</div>
				<div class="col">
					<div class="input-group">
						<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Apellido</span>
						<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="apellido" id="apellido">
					</div>
				</div>
			</div>
			<div class="row my-3">
				<div class="col">
					<div class="input-group">
						<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Correo</span>
						<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="correo" id="correo">
					</div>
				</div>
				<div class="col">
					<div class="input-group">
						<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Fecha de nacimiento</span>
						<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fnacimiento" id="fnacimiento" >
					</div>
				</div>
			</div>
			<div class="row my-3">
				<div class="col">
					<div class="input-group">
						<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Edad</span>
						<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="edad" id="edad">
					</div>
				</div>
				<div class="col">
					<div class="input-group">
						<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Sexo</span>
						<select name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
							<option value="">-- Seleccione un sexo --</option>
							<?php foreach ($sexo as $s) { ?>
								<option value="<?= $s->id_sexo ?>"><?= $s->nombre_sexo ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input type="submit" value="Guardar" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>


	<script src="<?php echo base_url('props/bootstrap/js/jquery.js');?>"></script>
	<script src="<?php echo base_url('props/bootstrap/js/bootstrap.js');?>"></script>
</body>
</html>