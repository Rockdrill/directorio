<?php 
include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Telefonos.php');

$db         =  new Conexion();
$dni        = $_POST['dni'];
$numero     = $_POST['numero'];
$tipo       = $_POST['tipo'];
$telefonos  = new Telefonos($numero,$dni,$tipo);
$valor      = $telefonos -> Registrar();


if ($valor == 'existe')
 {
 	echo "<script>
     alert('Ya existe el Telefono');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
 else if ($valor == 'ok')
 {
 	echo "<script>
     alert('Telefono Registrado Correctamente');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
  else 
 {
 	echo "<script>
     alert('Error al Registrar');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
 


 ?>