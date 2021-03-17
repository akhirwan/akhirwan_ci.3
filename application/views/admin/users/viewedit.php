<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/users/' ?>" class="btn btn-info">Kembali</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Ubah User</div>
						</div>
					</div>
					<div class="card-body">
						<?php foreach($user as $u) { ?>
						<form action="<?php echo base_url('admin/users/update')?>" method="post">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="hidden" class="form-control" name="id" placeholder="Masukan nama" value="<?php echo $u->uid; ?>">
								<input type="text" class="form-control" name="nama" placeholder="Masukan nama" value="<?php echo $u->name; ?>">
								<?php echo form_error('nama');?>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" placeholder="Masukan alamat" value="<?php echo $u->address; ?>">
								<?php echo form_error('alamat');?>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="telp" placeholder="Masukan no. telepon" value="<?php echo $u->phone; ?>">
								<?php echo form_error('telp');?>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Masukan email" value="<?php echo $u->email; ?>">
								<?php echo form_error('email');?>
							</div>
							<div class="form-group">
								<label>User Name</label>
								<input type="text" class="form-control" name="username" placeholder="Masukan username" value="<?php echo $u->username; ?>">
								<?php echo form_error('username');?>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="pwd" placeholder="Masukan password" value="<?php echo $u->password; ?>">
								<?php echo form_error('pwd');?>
							</div>
							<div class="form-group">
								<label>Level</label>
								<div>
									<div class="radio3 radio-check radio-inline">
										<input type="radio" id="radio4" name="level" value="admin" <?php echo ($u->level == 'admin' ? ' checked' : ''); ?> >
										<label for="radio4">Admin</label>
									</div>
									<div class="radio3 radio-check radio-inline">
										<input type="radio" id="radio5" name="level" value="author" <?php echo ($u->level == 'author' ? ' checked' : ''); ?> >
										<label for="radio5">Author</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Status</label>
								<div>
									<div class="radio3 radio-check radio-inline">
										<input type="radio" id="radio6" name="status" value="1" <?php echo ($u->user_status == '1' ? ' checked' : ''); ?>>
										<label for="radio6">Aktif</label>
									</div>
									<div class="radio3 radio-check radio-success radio-inline">
										<input type="radio" id="radio7" name="level" value="0" <?php echo ($u->user_status == '0' ? ' checked' : ''); ?>>
										<label for="radio7">Non Aktif</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
tinymce.init({
	selector: 'textarea',
	theme: "modern",
	height: 220,
	menubar: true,
	plugins: [
		'advlist autolink lists link image charmap print preview anchor textcolor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code help wordcount'
	],
	toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
	content_css: [
		'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		'//www.tinymce.com/css/codepen.min.css']
});
</script>