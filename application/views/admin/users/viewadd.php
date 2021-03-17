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
							<div class="title">Tambah User</div>
						</div>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url('admin/users/insert')?>" method="post">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" placeholder="Masukan nama" value="<?php echo set_value('nama'); ?>">
								<?php echo form_error('nama');?>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" placeholder="Masukan alamat" value="<?php echo set_value('alamat'); ?>">
								<?php echo form_error('alamat');?>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="telp" placeholder="Masukan no. telepon" value="<?php echo set_value('telp'); ?>">
								<?php echo form_error('telp');?>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Masukan email" value="<?php echo set_value('email'); ?>">
								<?php echo form_error('email');?>
							</div>
							<div class="form-group">
								<label>User Name</label>
								<input type="text" class="form-control" name="username" placeholder="Masukan username" value="<?php echo set_value('username'); ?>">
								<?php echo form_error('username');?>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="pwd" placeholder="Masukan password" value="<?php echo set_value('pwd'); ?>">
								<?php echo form_error('pwd');?>
							</div>
							<div class="form-group">
								<label>Level</label>
								<div>
									<div class="radio3 radio-check radio-inline">
										<input type="radio" id="radio4" name="level" value="admin">
										<label for="radio4">Admin</label>
									</div>
									<div class="radio3 radio-check radio-inline">
										<input type="radio" id="radio5" name="level" value="author" checked="">
										<label for="radio5">Author</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Status</label>
								<div>
									<div class="radio3 radio-check radio-inline">
										<input type="radio" id="radio6" name="status" value="1" checked="">
										<label for="radio6">Aktif</label>
									</div>
									<div class="radio3 radio-check radio-success radio-inline">
										<input type="radio" id="radio7" name="level" value="0">
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