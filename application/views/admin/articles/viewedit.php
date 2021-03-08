<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/articles/' ?>" class="btn btn-info">Kembali</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Buat Artikel Baru</div>
						</div>
					</div>
					<div class="card-body">
						<?php foreach($article as $art) { ?>
						<?php echo form_open_multipart('admin/articles/update');?>
						<!--<form action="<?php echo base_url('admin/articles/insert')?>" method="post" enctype="multipart/formdata">-->
							<div class="col-lg-8">
								<div class="form-group">
									<label>Judul</label>
									<input type="hidden" class="form-control" name="id" placeholder="Masukan judul artikel" value="<?php echo $art->id;?>">
									<input type="text" class="form-control" name="judul" placeholder="Masukan judul artikel" value="<?php echo $art->title;?>">
									<?php echo form_error('judul');?>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Kategori</label><br/>
									<select name="kategori">
										<option value=""> -- Pilih Kategori -- </option>
										<?php foreach ($category as $cat){ ?>
										<option <?php if(set_value('category') == $cat->cat_id){echo "selected='selected'";}?> value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?></option>
										<?php } ?>
									</select>
									<br/>
									<?php echo form_error('kategori');?>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="form-group">
									<label>Konten</label>
									<textarea class="form-control" id="editor" name="konten"><?php echo $art->content;?></textarea>
									<?php echo form_error('konten');?>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="exampleInputFile">Gambar Sampul</label>
									<input type="file" name="sampul" id="exampleInputFile">
									<?php if(isset($gambar_error)){ echo $gambar_error;}?>
									<?php echo form_error('sampul'); ?>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="submit" name="status" value="Draft" class="btn btn-warning">
									<input type="submit" name="status" value="Publish" class="btn btn-success">
								</div>
							</div>
						<!--</form>-->
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