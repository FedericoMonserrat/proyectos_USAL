<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Impresora Edit</h3>
            </div>
			<?php echo form_open('impresora/edit/'.$impresora['id_impresora']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_impresora" class="control-label">Nombre Impresora</label>
						<div class="form-group">
							<input type="text" name="nombre_impresora" value="<?php echo ($this->input->post('nombre_impresora') ? $this->input->post('nombre_impresora') : $impresora['nombre_impresora']); ?>" class="form-control" id="nombre_impresora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripción" class="control-label">Descripción</label>
						<div class="form-group">
							<input type="text" name="descripción" value="<?php echo ($this->input->post('descripción') ? $this->input->post('descripción') : $impresora['descripción']); ?>" class="form-control" id="descripción" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="precio_i" class="control-label">Precio I</label>
						<div class="form-group">
							<input type="text" name="precio_i" value="<?php echo ($this->input->post('precio_i') ? $this->input->post('precio_i') : $impresora['precio_i']); ?>" class="form-control" id="precio_i" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="visible" class="control-label">Visible</label>
						<div class="form-group">
							<input type="text" name="visible" value="<?php echo ($this->input->post('visible') ? $this->input->post('visible') : $impresora['visible']); ?>" class="form-control" id="visible" />
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