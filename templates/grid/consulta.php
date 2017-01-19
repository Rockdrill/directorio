<?php 

$db    = new Conexion();
$query = "
SELECT empresa,area,cargo FROM personal  WHERE ndocumento='".$_GET['n']."' AND estado=1";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table class="table table-bordered table-condesed">
 		<thead>
 			<tr class="active">
 				<th>Empresa</th>
 				<th>Área / Contrato </th>
 				<th>Cargo</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($fila = mysqli_fetch_object($result))
         {
          ?>
		<tr>
		<td><?php echo $fila->empresa; ?></td>
		<td><?php echo $fila->area; ?></td>
		<td><?php echo $fila->cargo; ?></td>
		</tr>
         <?php
         }

 		 ?>
 		</tbody>
 	</table>
 </div>