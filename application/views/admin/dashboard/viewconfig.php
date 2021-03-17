<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">Configuration</span>
			<div class="description">Halaman untuk update konfigurasi website</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Ubah Konfigurasi</div>
						</div>
					</div>
					<div class="card-body">
						<?php 
							if(isset($_GET['alert'])){
								if($_GET['alert'] == "sukses"){
									echo "<div class='alert fresh-color alert-success' role='alert'>Konfigurasi telah di-update!</div>";
								}
							}
						?>
						<?php foreach($configure as $p) { ?>
						<?php echo form_open_multipart('admin/dashboard/config_update');?>
							<div class="form-group">
								<label>URL</label>
								<input type="text" class="form-control" name="url" placeholder="Masukan url" value="<?php echo $p->url; ?>">
								<?php echo form_error('nama');?>
							</div>
							<div class="form-group">
								<label>Nama Website</label>
								<input type="text" class="form-control" name="nama" placeholder="Masukan nama" value="<?php echo $p->name; ?>">
								<?php echo form_error('nama');?>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<input type="text" class="form-control" name="desk" placeholder="Masukan telepon" value="<?php echo $p->description; ?>">
								<?php echo form_error('desk');?>
							</div>
							<div class="form-group">
								<label>Logo</label>
								<input type="file" name="logo">
								<small>Kosongkan jika tidak ingin mengubah logo</small>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" class="form-control" name="phone" placeholder="Masukan telepon" value="<?php echo $p->phone; ?>">
								<?php echo form_error('phone');?>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Masukan email" value="<?php echo $p->email; ?>">
								<?php echo form_error('phone');?>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="address" placeholder="Masukan alamat" value="<?php echo $p->address; ?>">
								<?php echo form_error('phone');?>
							</div>
							<div class="form-group">
								<label>Link Facebook</label>
								<input type="text" class="form-control" name="fb" placeholder="Masukan link facebook" value="<?php echo $p->link_fb; ?>">
								<?php echo form_error('fb');?>
							</div>
							<div class="form-group">
								<label>Link LinkedIn</label>
								<input type="text" class="form-control" name="li" placeholder="Masukan link LinkedIn" value="<?php echo $p->link_li; ?>">
								<?php echo form_error('li');?>
							</div>
							<div class="form-group">
								<label>Link Instagram</label>
								<input type="text" class="form-control" name="ig" placeholder="Masukan link instagram" value="<?php echo $p->link_ig; ?>">
								<?php echo form_error('ig');?>
							</div>
							<div class="form-group">
								<label>Link Github</label>
								<input type="text" class="form-control" name="github" placeholder="Masukan link github" value="<?php echo $p->link_github; ?>">
								<?php echo form_error('github');?>
							</div>
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</div>
						<?php echo form_close() ?>
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