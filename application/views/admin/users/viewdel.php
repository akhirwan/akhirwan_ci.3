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
							<div class="title">Konfirmasi Hapus User</div>
						</div>
					</div>
					<div class="card-body">
						<p><b><?php echo $user_del->name; ?></b> akan dihapus. dan semua artikel yang ditulis oleh <b><?php echo $user_del->name; ?></b> akan dipindahkan ke ?</p>
						<form action="<?php echo base_url('admin/users/del_process')?>" method="post">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control" name="deleted_user" value="<?php echo $user_del->uid; ?>">
								<select name="direct_user" required="required">
									<option> Pilih User </option>
									<?php foreach($user_other as $uo){?>
									<option value="<?php echo $uo->uid ?>">  <?php echo $uo->name ?> - <?php echo $uo->level ?> </option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-success">Delete User & Direct Article/s</button>
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