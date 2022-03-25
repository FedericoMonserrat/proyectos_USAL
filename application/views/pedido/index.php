<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pedidos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pedido/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Pedido</th>
						<th>Cliente</th>
						<th>Teléfono</th>
						<th>Cantidad</th>
						<th>Hoja</th>
						<th>Impresora</th>
						<th>Servicio</th>
						<th>Estado</th>
						<th>Monto Final</th>
						<th>Descripción Tarea</th>
						<th>Fecha Entrada</th>
						<th>Visible</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pedidos as $p){ ?>
                    <tr>
						<td><?php echo $p['id_pedido']; ?></td>
						<td><?php echo $p['cliente']; ?></td>
						<td><?php echo $p['teléfono']; ?></td>
						<td><?php echo $p['cantidad']; ?></td>
						<td><?php echo $p['hoja']; ?></td>
						<td><?php echo $p['impresora']; ?></td>
						<td><?php echo $p['servicio']; ?></td>
						<td><?php echo $p['estado']; ?></td>
						<td><?php echo $p['monto_final']; ?></td>
						<td><?php echo $p['descripción_tarea']; ?></td>
						<td><?php echo $p['fecha_entrada']; ?></td>
						<td><?php echo $p['visible']; ?></td>
						<td>
                            <a href="<?php echo site_url('pedido/edit/'.$p['id_pedido']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pedido/remove/'.$p['id_pedido']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
