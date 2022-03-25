<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hoja Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('hoja/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Hoja</th>
						<th>Tipo</th>
						<th>Gramaje</th>
						<th>Tamaño</th>
						<th>Precio H</th>
						<th>Visible</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($hoja as $h){ ?>
                    <tr>
						<td><?php echo $h['id_hoja']; ?></td>
						<td><?php echo $h['tipo']; ?></td>
						<td><?php echo $h['gramaje']; ?></td>
						<td><?php echo $h['tamaño']; ?></td>
						<td><?php echo $h['precio_h']; ?></td>
						<td><?php echo $h['visible']; ?></td>
						<td>
                            <a href="<?php echo site_url('hoja/edit/'.$h['id_hoja']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('hoja/remove/'.$h['id_hoja']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
