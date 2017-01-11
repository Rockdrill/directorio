<?php 

class Correos
{

protected $email;
protected $personal;


function __construct($email,$personal)
{

$this->email    = addslashes($email);
$this->personal = addslashes($personal);

}


function Registrar()
{

$db     = new Conexion();
$query  = "SELECT * FROM correos WHERE email='".$this->email."'";
$result = $db->query($query);
if ($result->num_rows > 0)
{
return "existe";
}
else
{ 
$query  = "INSERT INTO correos(email,personal_dni)
VALUES('".$this->email."','".$this->personal."')";
$result = $db->query($query);
if ($result) 
{
return "ok";	
}
else
{
return "error";
}

}

}


function Actualizar($id)
{

$db     = new Conexion();
$query  = "UPDATE correos SET email='".$this->email."' 
           WHERE  idcorreos='".$id."'";
$result = $db->query($query);
if ($result) 
{
   return "ok";	
}
else
{
   return "error";
}

}


function Eliminar($id)
{

$db     = new Conexion();
$query  = "DELETE  FROM  correos WHERE  idcorreos='".$id."'";
$result = $db->query($query);
if ($result) 
{
   return "ok";	
}
else
{
   return "error";
}

}




}

 ?>