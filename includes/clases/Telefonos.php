<?php 

class Telefonos
{

protected $numero;
protected $personal;
protected $tipo;


function __construct($numero,$personal,$tipo)
{

$this->numero   = addslashes($numero);
$this->personal = addslashes($personal);
$this->tipo     = addslashes($tipo);

}


function Registrar()
{

$db     = new Conexion();
$query  = "SELECT * FROM telefonos WHERE numero='".$this->numero."'";
$result = $db->query($query);
if ($result->num_rows > 0)
{
return "existe";
}
else
{ 
$query  = "INSERT INTO telefonos(numero,personal_dni,tipo)
VALUES('".$this->numero."','".$this->personal."','".$this->tipo."')";
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
$query  = "UPDATE telefonos SET numero='".$this->numero."',
          tipo='".$this->tipo."' WHERE  idtelefonos='".$id."'";
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
$query  = "DELETE  FROM  telefonos WHERE  idtelefonos='".$id."'";
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