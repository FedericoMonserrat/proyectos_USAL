<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pedido Edit</h3>
            </div>
			<?php echo form_open('pedido/edit/'.$pedido['id_pedido']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="cliente" class="control-label">Cliente</label>
						<div class="form-group">
							<input type="text" name="cliente" value="<?php echo ($this->input->post('cliente') ? $this->input->post('cliente') : $pedido['cliente']); ?>" class="form-control" id="cliente" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="teléfono" class="control-label">Teléfono</label>
						<div class="form-group">
							<input type="text" name="teléfono" value="<?php echo ($this->input->post('teléfono') ? $this->input->post('teléfono') : $pedido['teléfono']); ?>" class="form-control" id="teléfono" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cantidad" class="control-label">Cantidad</label>
						<div class="form-group">
							<input type="text" name="cantidad" value="<?php echo ($this->input->post('cantidad') ? $this->input->post('cantidad') : $pedido['cantidad']); ?>" class="form-control" id="cantidad" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hoja" class="control-label">Hoja</label>
						<div class="form-group">
							<input type="text" name="hoja" value="<?php echo ($this->input->post('hoja') ? $this->input->post('hoja') : $pedido['hoja']); ?>" class="form-control" id="hoja" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="impresora" class="control-label">Impresora</label>
						<div class="form-group">
							<input type="text" name="impresora" value="<?php echo ($this->input->post('impresora') ? $this->input->post('impresora') : $pedido['impresora']); ?>" class="form-control" id="impresora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="servicio" class="control-label">Servicio</label>
						<div class="form-group">
							<input type="text" name="servicio" value="<?php echo ($this->input->post('servicio') ? $this->input->post('servicio') : $pedido['servicio']); ?>" class="form-control" id="servicio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?php echo ($this->input->post('estado') ? $this->input->post('estado') : $pedido['estado']); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_final" class="control-label">Monto Final</label>
						<div class="form-group">
							<input type="text" name="monto_final" value="<?php echo ($this->input->post('monto_final') ? $this->input->post('monto_final') : $pedido['monto_final']); ?>" class="form-control" id="monto_final" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripción_tarea" class="control-label">Descripción Tarea</label>
						<div class="form-group">
							<input type="text" name="descripción_tarea" value="<?php echo ($this->input->post('descripción_tarea') ? $this->input->post('descripción_tarea') : $pedido['descripción_tarea']); ?>" class="form-control" id="descripción_tarea" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha_entrada" class="control-label">Fecha Entrada</label>
						<div class="form-group">
							<input type="text" name="fecha_entrada" value="<?php echo ($this->input->post('fecha_entrada') ? $this->input->post('fecha_entrada') : $pedido['fecha_entrada']); ?>" class="has-datepicker form-control" id="fecha_entrada" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="visible" class="control-label">Visible</label>
						<div class="form-group">
							<input type="text" name="visible" value="<?php echo ($this->input->post('visible') ? $this->input->post('visible') : $pedido['visible']); ?>" class="form-control" id="visible" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>