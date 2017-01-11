<?php 
include('../config.php');
include('../session.php');
include('../includes/bd/conexion.php');
include('../includes/clases/Personal.php');
$personal = new Personal();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Información</title>
<?php include('../templates/enlaces/principal.php'); ?>
<style>
table{font-size: 14px;}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php include('../templates/nav.php'); ?>
</div>
</div>
<div class="row">
<div class="col-md-5">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Datos Personales</h3>
	</div>
	<div class="panel-body">
	<?php include('../templates/grid/personal.php'); ?>
	</div>
</div>
</div>
<div class="col-md-7">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Empresa</h3>
	</div>
	<div class="panel-body">
	<?php include('../templates/grid/consulta.php'); ?>
	</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5">
<div class="panel panel-default">
	<div class="panel-heading">
	<?php if ($_SESSION[KEY.TIPO]=='admin'): ?>
	<?php include('../templates/modal/correo/registrar.php'); ?>
	<?php else: ?>
	<h4>Lista de Correos</h4>
	<?php endif ?>
	</div>
	<div class="panel-body">
	<?php include('../templates/grid/correo.php'); ?>
	</div>
</div>
</div>
<div class="col-md-7">
<div class="panel panel-default">
	<div class="panel-heading">
	<?php if ($_SESSION[KEY.TIPO]=='admin'): ?>
	<?php include('../templates/modal/telefono/registrar.php'); ?>
	<?php else: ?>
	<h4>Lista de Telefónos</h4>
	<?php endif ?>
	</div>
	<div class="panel-body">
	<?php include('../templates/grid/telefono.php'); ?>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>