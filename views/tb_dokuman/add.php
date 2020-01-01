<?php echo form_open('tb_dokuman/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama" class="col-md-4 control-label"><span class="text-danger">*</span>Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
			<span class="text-danger"><?php echo form_error('nama');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="deskripsi" class="col-md-4 control-label"><span class="text-danger">*</span>Deskripsi</label>
		<div class="col-md-8">
			<input type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" class="form-control" id="deskripsi" />
			<span class="text-danger"><?php echo form_error('deskripsi');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="file" class="col-md-4 control-label"><span class="text-danger">*</span>File</label>
		<div class="col-md-8">
			<input type="text" name="file" value="<?php echo $this->input->post('file'); ?>" class="form-control" id="file" />
			<span class="text-danger"><?php echo form_error('file');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tanggal" class="col-md-4 control-label"><span class="text-danger">*</span>Tanggal</label>
		<div class="col-md-8">
			<input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
			<span class="text-danger"><?php echo form_error('tanggal');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="idJenis" class="col-md-4 control-label"><span class="text-danger">*</span>IdJenis</label>
		<div class="col-md-8">
			<input type="text" name="idJenis" value="<?php echo $this->input->post('idJenis'); ?>" class="form-control" id="idJenis" />
			<span class="text-danger"><?php echo form_error('idJenis');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>