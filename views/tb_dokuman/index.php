<div class="pull-right">
	<a href="<?php echo site_url('tb_dokuman/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IdDokumen</th>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>File</th>
		<th>Tanggal</th>
		<th>IdJenis</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_dokumen as $t){ ?>
    <tr>
		<td><?php echo $t['idDokumen']; ?></td>
		<td><?php echo $t['nama']; ?></td>
		<td><?php echo $t['deskripsi']; ?></td>
		<td><?php echo $t['file']; ?></td>
		<td><?php echo $t['tanggal']; ?></td>
		<td><?php echo $t['idJenis']; ?></td>
		<td>
            <a href="<?php echo site_url('tb_dokuman/edit/'.$t['idDokumen']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tb_dokuman/remove/'.$t['idDokumen']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
