<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Servicios Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('servicio/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Servicio</th>
						<th>Nombre Servicio</th>
						<th>Detalle</th>
						<th>Precio S</th>
						<th>Visible</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($servicios as $s){ ?>
                    <tr>
						<td><?php echo $s['id_servicio']; ?></td>
						<td><?php echo $s['nombre_servicio']; ?></td>
						<td><?php echo $s['detalle']; ?></td>
						<td><?php echo $s['precio_s']; ?></td>
						<td><?php echo $s['visible']; ?></td>
						<td>
                            <a href="<?php echo site_url('servicio/edit/'.$s['id_servicio']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('servicio/remove/'.$s['id_servicio']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
