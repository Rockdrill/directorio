<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso</title>
<?php include('templates/enlaces/principal.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">

<h1 class="text-center">Directorio</h1>

<center><img src="assets/img/logo_192.png" class="img-responsive" alt="directorio"></center>
<p></p>

<form action="procesos/Login" method="POST" autocomplete="Off">
<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title text-center"><strong>Inicio de Sesión</strong></h1>
	</div>
	<div class="panel-body">

	<div class="form-group">
	<label for="">Usuario</label>
	<input type="text" name="user" pattern="[a-zA-Z0-9]+"   id="" class="form-control" required="" maxlength="10" autofocus="">
	</div>
    
    <div class="form-group">
	<label for="">Contraseña</label>
	<input type="password" name="pass" pattern="[a-zA-Z0-9]+" id="" class="form-control" required="" maxlength="10">
	</div>

	<button class="btn btn-success">Ingresar</button>

	</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>