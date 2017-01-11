<?php 
include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Telefonos.php');

$db         =  new Conexion();
$id         = $_POST['id'];
$dni        = $_POST['dni'];
$numero     = $_POST['numero'];
$tipo       = $_POST['tipo'];
$telefonos  = new Telefonos($numero,$dni,$tipo);
$valor      = $telefonos -> Actualizar($id);

 if ($valor == 'ok')
 {
 	echo "<script>
     alert('Telefono Actualizado');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
  else 
 {
 	echo "<script>
     alert('Error al Actualizar');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
 


 ?>