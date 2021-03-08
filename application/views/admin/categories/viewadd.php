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
						<form class="form-horizontal" action="<?php echo base_url('admin/categories/insert')?>" method="post">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Kategori</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori Baru">
									<?php echo form_error('kategori');?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>