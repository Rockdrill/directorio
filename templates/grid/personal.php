<ul>

<li>Personal: <?php echo $personal->datos($_GET['n'],'nombres').' '.$personal->datos($_GET['n'],'apellidos'); ?></li>
<li>DNI: <?php echo $personal->datos($_GET['n'],'ndocumento') ?></li>
<li>Dirección: <?php echo $personal->datos($_GET['n'],'direccion') ?></li>
<li>Fecha de Ingreso: 
<?php 
$fecha        = $personal->datos($_GET['n'],'fecha_ingreso');
$originalDate = $fecha;
$newDate      = date("d/m/Y", strtotime($originalDate));
echo $newDate;

 ?>
 	
 </li>
</ul>
