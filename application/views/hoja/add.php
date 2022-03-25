<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hoja Add</h3>
            </div>
            <?php echo form_open('hoja/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tipo" class="control-label">Tipo</label>
						<div class="form-group">
							<input type="text" name="tipo" value="<?php echo $this->input->post('tipo'); ?>" class="form-control" id="tipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gramaje" class="control-label">Gramaje</label>
						<div class="form-group">
							<input type="text" name="gramaje" value="<?php echo $this->input->post('gramaje'); ?>" class="form-control" id="gramaje" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tamaño" class="control-label">Tamaño</label>
						<div class="form-group">
							<input type="text" name="tamaño" value="<?php echo $this->input->post('tamaño'); ?>" class="form-control" id="tamaño" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="precio_h" class="control-label">Precio H</label>
						<div class="form-group">
							<input type="text" name="precio_h" value="<?php echo $this->input->post('precio_h'); ?>" class="form-control" id="precio_h" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="visible" class="control-label">Visible</label>
						<div class="form-group">
							<input type="text" name="visible" value="<?php echo $this->input->post('visible'); ?>" class="form-control" id="visible" />
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