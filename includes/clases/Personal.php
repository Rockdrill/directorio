<?php 

class Personal
{

function datos($dni,$variable)
{

$db     = new Conexion();
$query  = "SELECT * FROM personal  WHERE ndocumento='".$dni."' order by idpersonal";
$result = $db->query($query);
$dato   = mysqli_fetch_array($result);
return  $dato[$variable];

}



}


 ?>