<?php 

$db     = new Conexion();
$query  = "SELECT * FROM personal where 
  CONCAT(nombres,apellidos) like '%".$_GET['n']."%'  and estado='1'";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr class="active">
 			
 				<th>Nombres</th>
 				<th>Apellidos</th>
 				<th>DNI</th>
 				<th>Fotocheck</th>
 				<th>Dirección</th>
 				<th>Empresa</th>
 				<th>Área</th>
 				<th>Local</th>
 				<th>Cargo</th>
 				<th>Acciones</th>
 						
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($row = mysqli_fetch_array($result))
         {
        ?>
		<tr>
	
		<td><?php echo $row['nombres']; ?></td>
		<td><?php echo $row['apellidos']; ?></td>
		<td><?php echo $row['ndocumento']; ?></td>
		<td><?php echo $row['fotocheck']; ?></td>
		<td><?php echo $row['direccion']; ?></td>
		<td><?php echo $row['empresa']; ?></td>
		<td><?php echo $row['area']; ?></td>
		<td><?php echo $row['local']; ?></td>
		<td><?php echo $row['cargo']; ?></td>
		<td style="text-align: center;" >
		<a href="<?php echo PATH; ?>pages/editar?n=<?php echo $row['ndocumento'] ?>">
		<?php if ($_SESSION[KEY.TIPO]=='admin'): ?>
		<i class="fa fa-edit fa-2x text-primary"></i>
		<?php else: ?>
		<i class="fa fa-search fa-2x text-primary"></i>
		<?php endif ?>
		</a>
		</td>
	
		</tr>
        <?php
         }
 		 ?>
 		</tbody>
 	</table>
 </div>

 <script>
 $(document).ready(function() {
    $('#consulta').DataTable();
} );
 </script>