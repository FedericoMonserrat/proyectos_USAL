<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Servicio Edit</h3>
            </div>
			<?php echo form_open('servicio/edit/'.$servicio['id_servicio']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_servicio" class="control-label">Nombre Servicio</label>
						<div class="form-group">
							<input type="text" name="nombre_servicio" value="<?php echo ($this->input->post('nombre_servicio') ? $this->input->post('nombre_servicio') : $servicio['nombre_servicio']); ?>" class="form-control" id="nombre_servicio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="detalle" class="control-label">Detalle</label>
						<div class="form-group">
							<input type="text" name="detalle" value="<?php echo ($this->input->post('detalle') ? $this->input->post('detalle') : $servicio['detalle']); ?>" class="form-control" id="detalle" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="precio_s" class="control-label">Precio S</label>
						<div class="form-group">
							<input type="text" name="precio_s" value="<?php echo ($this->input->post('precio_s') ? $this->input->post('precio_s') : $servicio['precio_s']); ?>" class="form-control" id="precio_s" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="visible" class="control-label">Visible</label>
						<div class="form-group">
							<input type="text" name="visible" value="<?php echo ($this->input->post('visible') ? $this->input->post('visible') : $servicio['visible']); ?>" class="form-control" id="visible" />
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