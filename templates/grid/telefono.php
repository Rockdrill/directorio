<?php 

$db     = new Conexion();
$query  = "SELECT * FROM telefonos WHERE personal_dni='".$_GET['n']."'";
$result = $db->query($query);

 ?>

 <div class="table-responsive">
 	<table class="table table-bordered table-condensed">
 		<thead>
 			<tr class="info"> 
 				<th>Correo</th>
 				<th>Tipo</th>
 				<?php if ($_SESSION[KEY.TIPO]=='admin'): ?>
 				<th>Acciones</th>
 				<?php else: ?>
 					
 				<?php endif ?>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
         
         while ($fila = mysqli_fetch_object($result)) 
		{
        
		$modal_a     ='modal_a';
		$button_a    ='#modal_a';
		$modal_a    .=$a;
		$button_a    =$button_a.=$a;

		$modal_e     ='modal_e';
		$button_e    ='#modal_e';
		$modal_e    .=$e;
		$button_e    =$button_e.=$e;
        
		?>
		<tr>
		<td><?php echo $fila->numero; ?></td>
		<td><?php echo $fila->tipo; ?></td>
		<?php if ($_SESSION[KEY.TIPO]=='admin'): ?>
		<td>
		<a  href='<?php echo $button_a;?>' role="button"  data-toggle="modal">
		<i class="fa fa-edit fa-2x"></i>
		</a>
		<a  href='<?php  echo $button_e;?>' role="button"  data-toggle="modal">
		<i class="fa fa-trash text-danger fa-2x"></i>
		</a>
		</td>
		<?php else: ?>
			
		<?php endif ?>
		
		<?php 
         include('../templates/modal/telefono/actualizar.php');
         include('../templates/modal/telefono/eliminar.php');
		 ?>
		</tr>
		<?php
		$a=$a+1;
		$e=$e+1;

		}


 		 ?>
 		</tbody>
 	</table>
 </div>