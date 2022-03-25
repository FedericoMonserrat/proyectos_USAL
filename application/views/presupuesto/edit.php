<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Presupuesto Edit</h3>
            </div>
			<?php echo form_open('presupuesto/edit/'.$presupuesto['id_presupuesto']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="descuento" class="control-label">Descuento</label>
						<div class="form-group">
							<input type="text" name="descuento" value="<?php echo ($this->input->post('descuento') ? $this->input->post('descuento') : $presupuesto['descuento']); ?>" class="form-control" id="descuento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cantidad" class="control-label">Cantidad</label>
						<div class="form-group">
							<input type="text" name="cantidad" value="<?php echo ($this->input->post('cantidad') ? $this->input->post('cantidad') : $presupuesto['cantidad']); ?>" class="form-control" id="cantidad" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="monto_final" class="control-label">Monto Final</label>
						<div class="form-group">
							<input type="text" name="monto_final" value="<?php echo ($this->input->post('monto_final') ? $this->input->post('monto_final') : $presupuesto['monto_final']); ?>" class="form-control" id="monto_final" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_cliente" class="control-label">Id Cliente</label>
						<div class="form-group">
							<input type="text" name="id_cliente" value="<?php echo ($this->input->post('id_cliente') ? $this->input->post('id_cliente') : $presupuesto['id_cliente']); ?>" class="form-control" id="id_cliente" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_hoja" class="control-label">Id Hoja</label>
						<div class="form-group">
							<input type="text" name="id_hoja" value="<?php echo ($this->input->post('id_hoja') ? $this->input->post('id_hoja') : $presupuesto['id_hoja']); ?>" class="form-control" id="id_hoja" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_impresora" class="control-label">Id Impresora</label>
						<div class="form-group">
							<input type="text" name="id_impresora" value="<?php echo ($this->input->post('id_impresora') ? $this->input->post('id_impresora') : $presupuesto['id_impresora']); ?>" class="form-control" id="id_impresora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_servicio" class="control-label">Id Servicio</label>
						<div class="form-group">
							<input type="text" name="id_servicio" value="<?php echo ($this->input->post('id_servicio') ? $this->input->post('id_servicio') : $presupuesto['id_servicio']); ?>" class="form-control" id="id_servicio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cliente" class="control-label">Cliente</label>
						<div class="form-group">
							<input type="text" name="cliente" value="<?php echo ($this->input->post('cliente') ? $this->input->post('cliente') : $presupuesto['cliente']); ?>" class="form-control" id="cliente" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="visible" class="control-label">Visible</label>
						<div class="form-group">
							<input type="text" name="visible" value="<?php echo ($this->input->post('visible') ? $this->input->post('visible') : $presupuesto['visible']); ?>" class="form-control" id="visible" />
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