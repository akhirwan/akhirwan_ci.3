<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/users/profile' ?>" class="btn btn-info"> Kembali </a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Ganti Password</div>
						</div>
					</div>
					<?php
						if(isset($_GET['alert'])){
							if($_GET['alert']=="sukses"){
								echo "<div class='alert fresh-color alert-success' role='alert'>Password telah diubah !</div>";
							} else if($_GET['alert']=="gagal"){
								echo "<div class='alert fresh-color alert-danger' role='alert'><strong>Maaf ! </strong>Password lama yang Anda masukan salah !!</div>";
							}
						}
					?>
					<div class="card-body">
						<form class="form-horizontal" action="<?php echo base_url('admin/users/updatepwd')?>" method="post">
							<div class="form-group">
								<label class="col-sm-2 control-label">Password Lama</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password_lama" placeholder="Masukan Password Lama">
									<?php echo form_error('password_lama');?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Password Baru</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password_baru" placeholder="Masukan Password Baru">
									<?php echo form_error('password_baru');?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Konfirmasi Password Baru</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="konfirmasi_password" placeholder="Ulangi Password Baru">
									<?php echo form_error('konfirmasi_password');?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>