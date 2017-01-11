<ul>

<li>Personal: <?php echo $personal->datos($_GET['n'],'nombres').' '.$personal->datos($_GET['n'],'apellidos'); ?></li>
<li>DNI: <?php echo $personal->datos($_GET['n'],'ndocumento') ?></li>
<li>Dirección: <?php echo $personal->datos($_GET['n'],'direccion') ?></li>
<li>Grupo: <?php echo $personal->datos($_GET['n'],'grupo') ?></li>
<li>Local: <?php echo $personal->datos($_GET['n'],'local') ?></li>
<li>Planilla: <?php echo $personal->datos($_GET['n'],'planilla') ?></li>
<li>Categoria: <?php echo $personal->datos($_GET['n'],'categoria') ?></li>
<li>Fecha de Ingreso: 
<?php 
$fecha        = $personal->datos($_GET['n'],'fecha_ingreso');
$originalDate = $fecha;
$newDate      = date("d/m/Y", strtotime($originalDate));
echo $newDate;

 ?>
 	
 </li>
</ul>
