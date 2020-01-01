<?php echo form_open('tb_user/edit/'.$tb_user['idUser'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="hakAkses" class="col-md-4 control-label"><span class="text-danger">*</span>HakAkses</label>
		<div class="col-md-8">
			<select name="hakAkses" class="form-control">
				<option value="">select</option>
				<?php 
				$hakAkses_values = array(
					'admin'=>'Admin',
					'user'=>'User',
					'rt'=>'RT',
					'rw'=>'RW',
				);

				foreach($hakAkses_values as $value => $display_text)
				{
					$selected = ($value == $tb_user['hakAkses']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('hakAkses');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label"><span class="text-danger">*</span>Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $tb_user['password']); ?>" class="form-control" id="password" />
			<span class="text-danger"><?php echo form_error('password');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label"><span class="text-danger">*</span>Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $tb_user['nama']); ?>" class="form-control" id="nama" />
			<span class="text-danger"><?php echo form_error('nama');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label"><span class="text-danger">*</span>Username</label>
		<div class="col-md-8">
			<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $tb_user['username']); ?>" class="form-control" id="username" />
			<span class="text-danger"><?php echo form_error('username');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label"><span class="text-danger">*</span>Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $tb_user['email']); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label"><span class="text-danger">*</span>Keterangan</label>
		<div class="col-md-8">
			<input type="text" name="keterangan" value="<?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $tb_user['keterangan']); ?>" class="form-control" id="keterangan" />
			<span class="text-danger"><?php echo form_error('keterangan');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>