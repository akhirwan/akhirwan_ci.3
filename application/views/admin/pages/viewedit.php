<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/pages/' ?>" class="btn btn-info">Kembali</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Ubah Halaman</div>
						</div>
					</div>
					<div class="card-body">
						<?php foreach($pages as $p) { ?>
						<form action="<?php echo base_url('admin/pages/update')?>" method="post">
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" placeholder="Masukan judul halaman" value="<?php echo $p->page_id; ?>">
								<input type="text" class="form-control" name="judul" placeholder="Masukan judul halaman" value="<?php echo $p->page_title; ?>">
								<?php echo form_error('judul');?>
							</div>
							<div class="form-group">
								<label>Masukan Konten</label>
								<?php echo form_error('konten');?>
								<textarea class="form-control" id="editor" name="konten"><?php echo $p->page_content; ?></textarea>
								
							</div>
							<div class="form-group">
								<div class="">
									<button type="submit" class="btn btn-success">Publish</button>
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