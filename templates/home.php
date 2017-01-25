<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
<?php include('templates/enlaces/principal.php'); ?>
<style>
.lista
{
font-size: 20px;


}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php include('templates/nav.php'); ?>
</div>
</div>

<div class="row">
<div class="col-md-12">
<center><img src="assets/img/directorio.jpg" alt="directorio" class="img-responsive"></center>
<h1 class="text-center"><i><strong>Directorio Empresarial:</strong></i>
</h1>
</div>
</div>	

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<ul>
<?php 

$query  = "SELECT empresa FROM personal GROUP BY empresa ORDER BY empresa";
$result = $db->query($query);
while ($fila = mysqli_fetch_object($result))
 {
	echo "<li class='lista'>".$fila->empresa."</li>";
 }

 ?>
</ul>
</div>
</div>


</div>
</body>
</html>
