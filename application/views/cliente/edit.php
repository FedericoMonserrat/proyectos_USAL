<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cliente Edit</h3>
            </div>
			<?php echo form_open('cliente/edit/'.$cliente['id_cliente']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $cliente['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?php echo form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellido" class="control-label"><span class="text-danger">*</span>Apellido</label>
						<div class="form-group">
							<input type="text" name="apellido" value="<?php echo ($this->input->post('apellido') ? $this->input->post('apellido') : $cliente['apellido']); ?>" class="form-control" id="apellido" />
							<span class="text-danger"><?php echo form_error('apellido');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="teléfono" class="control-label">Teléfono</label>
						<div class="form-group">
							<input type="text" name="teléfono" value="<?php echo ($this->input->post('teléfono') ? $this->input->post('teléfono') : $cliente['teléfono']); ?>" class="form-control" id="teléfono" />
							<span class="text-danger"><?php echo form_error('teléfono');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dirección" class="control-label">Dirección</label>
						<div class="form-group">
							<input type="text" name="dirección" value="<?php echo ($this->input->post('dirección') ? $this->input->post('dirección') : $cliente['dirección']); ?>" class="form-control" id="dirección" />
							<span class="text-danger"><?php echo form_error('dirección');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="visible" class="control-label"><span class="text-danger">*</span>Visible</label>
						<div class="form-group">
							<input type="text" name="visible" value="<?php echo ($this->input->post('visible') ? $this->input->post('visible') : $cliente['visible']); ?>" class="form-control" id="visible" />
							<span class="text-danger"><?php echo form_error('visible');?></span>
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