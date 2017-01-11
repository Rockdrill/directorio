<?php 

include('config.php');
include('includes/bd/conexion.php');
$db = new Conexion();

session_start();

if (!isset($_SESSION[KEY.USUARIO]))
 {
	include('templates/acceso.php');
}
else
{
	include('templates/home.php');
}





 ?>