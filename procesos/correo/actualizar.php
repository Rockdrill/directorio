<?php 
include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Correos.php');

$db       =  new Conexion();
$id      = $_POST['id'];
$dni      = $_POST['dni'];
$correo   = $_POST['correo'];
$correos  = new Correos($correo,$dni);
$valor    = $correos -> Actualizar($id);

 if ($valor == 'ok')
 {
 	echo "<script>
     alert('Correo Actualizado');
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