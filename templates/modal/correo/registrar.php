<a class="btn btn-primary" data-toggle="modal" href='#modal-id-correo'>Agregar Correo</a>

<form action="../procesos/correo/agregar" method="POST">

<div class="modal fade" id="modal-id-correo">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Agregar Correo</h4>
			</div>
			<div class="modal-body">

			<input type="hidden"  name="dni" value="<?php echo $_GET['n']; ?>">

			<div class="form-group">
			<label for="">Correo</label>
			<input type="email" name="correo" class="form-control" required="">
			</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Agregar</button>
			</div>
		</div>
	</div>
</div>

</form>