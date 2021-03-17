<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/users/gantipwd' ?>" class="btn btn-info"><i class="fa fa-user-secret"></i> Ganti Password</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Ubah Profile</div>
						</div>
					</div>
					<div class="card-body">
						<?php 
							if(isset($_GET['alert'])){
								if($_GET['alert'] == "sukses"){
									echo "<div class='alert fresh-color alert-success' role='alert'>Profile telah di-update!</div>";
								}
							}
						?>
						<?php foreach($profile as $p) { ?>
						<form action="<?php echo base_url('admin/users/profile_update')?>" method="post">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" placeholder="Masukan nama" value="<?php echo $p->name; ?>">
								<?php echo form_error('nama');?>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="telepon" placeholder="Masukan telepon" value="<?php echo $p->phone; ?>">
								<?php echo form_error('telepon');?>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" placeholder="Masukan telepon" value="<?php echo $p->email; ?>">
								<?php echo form_error('email');?>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<?php echo form_error('alamat');?>
								<textarea class="form-control" id="editor" name="alamat"><?php echo $p->address; ?></textarea>
								
							</div>
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-success">Update</button>
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