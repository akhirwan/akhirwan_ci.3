<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/categories/add' ?>" class="btn btn-info">Tambah</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Kategori</div>
						</div>
					</div>
					<div class="card-body">
						<table class="datatable table table-striped" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="10px">No</th>
									<th>Kategori</th>
									<th>Slug</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kategori</th>
									<th>Slug</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php
									$no = 1;
									foreach($category as $kat){
								?>
								<tr>
									<td><?php echo $no++ ;?></td>
									<td><?php echo $kat->cat_name;?></td>
									<td><?php echo $kat->cat_slug;?></td>
									<td>
										<a href="<?php echo base_url().'admin/categories/edit/'.$kat->cat_id; ?>" class=""> <i class="fa fa-edit"></i> </a>
										<a href="<?php echo base_url().'admin/categories/del/'.$kat->cat_id; ?>" class=""> <i class="fa fa-trash"></i> </a>
									</td>
								</tr>
								<?php 
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>