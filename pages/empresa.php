<?php 
include('../config.php');
include('../session.php');
include('../includes/bd/conexion.php');
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_GET['n']; ?></title>
<?php include('../templates/enlaces/principal.php'); ?>
<?php include('../templates/enlaces/datatables.php'); ?>
</head>
<body>
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<?php include('../templates/nav.php'); ?>
</div>
</div>	

<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $_GET['n']; ?></h3>
	</div>
	<div class="panel-body">
		<?php include('../templates/grid/empresa.php'); ?>
	</div>
</div>
</div>
</div>


</div>	
</body>
</html>