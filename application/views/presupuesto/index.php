<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Presupuesto Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('presupuesto/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Presupuesto</th>
						<th>Descuento</th>
						<th>Cantidad</th>
						<th>Monto Final</th>
						<th>Id Cliente</th>
						<th>Id Hoja</th>
						<th>Id Impresora</th>
						<th>Id Servicio</th>
						<th>Cliente</th>
						<th>Visible</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($presupuesto as $p){ ?>
                    <tr>
						<td><?php echo $p['id_presupuesto']; ?></td>
						<td><?php echo $p['descuento']; ?></td>
						<td><?php echo $p['cantidad']; ?></td>
						<td><?php echo $p['monto_final']; ?></td>
						<td><?php echo $p['id_cliente']; ?></td>
						<td><?php echo $p['id_hoja']; ?></td>
						<td><?php echo $p['id_impresora']; ?></td>
						<td><?php echo $p['id_servicio']; ?></td>
						<td><?php echo $p['cliente']; ?></td>
						<td><?php echo $p['visible']; ?></td>
						<td>
                            <a href="<?php echo site_url('presupuesto/edit/'.$p['id_presupuesto']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('presupuesto/remove/'.$p['id_presupuesto']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
