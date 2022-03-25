<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Impresora Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('impresora/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Impresora</th>
						<th>Nombre Impresora</th>
						<th>Descripción</th>
						<th>Precio I</th>
						<th>Visible</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($impresora as $i){ ?>
                    <tr>
						<td><?php echo $i['id_impresora']; ?></td>
						<td><?php echo $i['nombre_impresora']; ?></td>
						<td><?php echo $i['descripción']; ?></td>
						<td><?php echo $i['precio_i']; ?></td>
						<td><?php echo $i['visible']; ?></td>
						<td>
                            <a href="<?php echo site_url('impresora/edit/'.$i['id_impresora']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('impresora/remove/'.$i['id_impresora']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
