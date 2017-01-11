<?php 
include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Telefonos.php');

$db       =  new Conexion();
$id       = $_POST['id'];
$dni      = $_POST['dni'];
$telefonos  = new Telefonos('?','?','?');
$valor    = $telefonos -> Eliminar($id);

 if ($valor == 'ok')
 {
 	echo "<script>
     alert('Telefono Eliminado');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
  else 
 {
 	echo "<script>
     alert('Error al Eliminar');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
 


 ?>