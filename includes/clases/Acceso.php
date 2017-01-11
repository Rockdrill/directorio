<?php 

class Acceso
{

protected $user;
protected $pass;


function __construct($user,$pass)
{

$this->user  = addslashes($user);
$this->pass  = addslashes($pass);


}


function Login()
{

$db    = new Conexion();
$query = "SELECT * FROM usuarios WHERE UPPER(user)='".strtoupper($this->user)."' AND pass='".$this->pass."'"; 
$result = $db->query($query);
$dato   = mysqli_fetch_array($result);

if ($result->num_rows > 0 ) 
{
 session_start();
 $_SESSION[KEY.USUARIO]= $dato['idusuarios'];
 $_SESSION[KEY.USER]   = $dato['user'];
 $_SESSION[KEY.PASS]   = $dato['pass'];
 $_SESSION[KEY.TIPO]   = $dato['tipo'];
 header('Location: '.PATH.'');
}
else
{
 echo "<meta charset='UTF-8'>";
  echo "<script>
        alert('Usuario o Contraseña Incorrecta');
        window.location='".PATH."';
       </script>";
}


}


function Logout()
{

if (!isset($_SESSION[KEY.USUARIO]))
 {
	header('Location: '.PATH.'');
 }
else
{
	unset($_SESSION[KEY.USUARIO]);
	unset($_SESSION[KEY.USER]);
	unset($_SESSION[KEY.PASS]);
	unset($_SESSION[KEY.TIPO]);
	header('Location: '.PATH.'');
}

}



}











 ?>