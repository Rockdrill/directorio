<?php 
include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Correos.php');

$db       =  new Conexion();
$id       = $_POST['id'];
$dni      = $_POST['dni'];
$correos  = new Correos('?','?');
$valor    = $correos -> Eliminar($id);

 if ($valor == 'ok')
 {
 	echo "<script>
     alert('Correo Eliminado');
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