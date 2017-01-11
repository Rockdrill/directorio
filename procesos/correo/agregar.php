<?php 
include('../../config.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Correos.php');

$db       =  new Conexion();
$dni      = $_POST['dni'];
$correo   = $_POST['correo'];
$correos  = new Correos($correo,$dni);
$valor    = $correos -> Registrar();


if ($valor == 'existe')
 {
 	echo "<script>
     alert('Ya existe el correo');
     window.location='".PATH."pages/editar?n=".$dni."';
     </script>";
 }
 else if ($valor == 'ok')
 {
 	echo "<script>
     alert('Correo Registrado Correctamente');
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