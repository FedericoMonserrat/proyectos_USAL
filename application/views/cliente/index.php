<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cliente Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cliente/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cliente</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Teléfono</th>
						<th>Dirección</th>
						<th>Visible</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cliente as $c){ ?>
                    <tr>
						<td><?php echo $c['id_cliente']; ?></td>
						<td><?php echo $c['nombre']; ?></td>
						<td><?php echo $c['apellido']; ?></td>
						<td><?php echo $c['teléfono']; ?></td>
						<td><?php echo $c['dirección']; ?></td>
						<td><?php echo $c['visible']; ?></td>
						<td>
                            <a href="<?php echo site_url('cliente/edit/'.$c['id_cliente']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('cliente/remove/'.$c['id_cliente']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
