<div class="pull-right">
	<a href="<?php echo site_url('tb_user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdUser</th>
		<th>HakAkses</th>
		<th>Password</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Email</th>
		<th>Keterangan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_user as $t){ ?>
    <tr>
		<td><?php echo $t['idUser']; ?></td>
		<td><?php echo $t['hakAkses']; ?></td>
		<td><?php echo $t['password']; ?></td>
		<td><?php echo $t['nama']; ?></td>
		<td><?php echo $t['username']; ?></td>
		<td><?php echo $t['email']; ?></td>
		<td><?php echo $t['keterangan']; ?></td>
		<td>
            <a href="<?php echo site_url('tb_user/edit/'.$t['idUser']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tb_user/remove/'.$t['idUser']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
