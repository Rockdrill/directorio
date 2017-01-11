
<div class="modal fade" id="<?php echo $modal_a;?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar Correo</h4>
			</div>
			<form action="../procesos/correo/actualizar" method="POST">
			<div class="modal-body">
			<input type="hidden" name="id" value="<?php  echo $fila->idcorreos; ?>">
			<input type="hidden" name="dni" value="<?php echo $fila->personal_dni; ?>">
			<input type="email" name="correo" id="" value="<?php  echo $fila->email; ?>" class="form-control">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
			</form>
		</div>
	</div>
</div>