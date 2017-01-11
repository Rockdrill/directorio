
<div class="modal fade" id="<?php echo $modal_e; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
	<h2 class="text-center text-muted">Estas seguro?</h2>
	<p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el <?php echo $fila->tipo ?>. Deseas continuar?</p>
			
			<form action="../procesos/telefono/eliminar" method="POST">
			<input type="hidden" name="dni" value="<?php echo $_GET['n']; ?>">
			<input type="hidden" name="id" value="<?php echo $fila->idtelefonos; ?>">
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Eliminar</button>
			</div>
			</form>
		</div>
	</div>
</div>