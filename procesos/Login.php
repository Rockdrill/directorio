<?php 

include('../config.php');
include('../includes/bd/conexion.php');
include('../includes/clases/Acceso.php');

$acceso  =  new Acceso($_POST['user'],$_POST['pass']);
$acceso -> Login();

 ?>