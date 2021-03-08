<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/categories/' ?>" class="btn btn-info">Kembali</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Buat Kategori Baru</div>
						</div>
					</div>
					<div class="card-body">
						<?php foreach ($category as $kat) {?>
						<form class="form-horizontal" action="<?php echo base_url('admin/categories/update')?>" method="post">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Kategori</label>
								<div class="col-sm-10">
									<input type="hidden" class="form-control" name="id" placeholder="Masukan Kategori Baru" value="<?php echo $kat->cat_id; ?>">
									<input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori Baru" value="<?php echo $kat->cat_name; ?>">
									<?php echo form_error('kategori');?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Submit</button>
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