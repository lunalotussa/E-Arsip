<div class="pull-right">
	<a href="<?php echo site_url('tb_jenisdokuman/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdJenis</th>
		<th>Nama</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_jenisdokumen as $t){ ?>
    <tr>
		<td><?php echo $t['idJenis']; ?></td>
		<td><?php echo $t['nama']; ?></td>
		<td>
            <a href="<?php echo site_url('tb_jenisdokuman/edit/'.$t['idJenis']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tb_jenisdokuman/remove/'.$t['idJenis']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
