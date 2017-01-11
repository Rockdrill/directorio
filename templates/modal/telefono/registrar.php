<a class="btn btn-primary" data-toggle="modal" href='#modal-id-telefono'>Agregar Telefóno</a>

<form action="../procesos/telefono/agregar" method="POST">

<div class="modal fade" id="modal-id-telefono">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Agregar Telefóno</h4>
			</div>
			<div class="modal-body">

			<input type="hidden"  name="dni" value="<?php echo $_GET['n']; ?>">

			<div class="form-group">
			<label for="">Numero</label>
			<input type="text" name="numero" class="form-control" required="">
			</div>

			<div class="form-group">
			<label for="">Tipo</label>
			<select name="tipo" id="" class="form-control" required="">
			<option value="">[ Seleccionar]</option>
			<option value="celular">Celular</option>
			<option value="telefono">Telefóno</option>
			</select>
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