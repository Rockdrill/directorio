
<div class="modal fade" id="<?php echo $modal_a;?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar Telefóno</h4>
			</div>
			<form action="../procesos/telefono/actualizar" method="POST">
			<div class="modal-body">
			<input type="hidden" name="id" value="<?php  echo $fila->idtelefonos; ?>">
			<input type="hidden" name="dni" value="<?php echo $fila->personal_dni; ?>">
		     
		     <div class="form-group">
		     <label for="">Numero</label>
		     <input type="numero" name="numero" id="" value="<?php  echo $fila->numero; ?>" class="form-control">
		     </div>

		     <div class="form-group">
		     <label for="">Tipo</label>
		     <select name="tipo" id="" class="form-control">
		     <option value="<?php echo $fila->tipo; ?>"><?php echo $fila->tipo; ?></option>
		     <option value="celular">Celular</option>
		     <option value="telefono">Telefóno</option>
		     </select>
		     </div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
			</form>
		</div>
	</div>
</div>