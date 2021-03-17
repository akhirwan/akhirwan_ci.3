<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/pages/add' ?>" class="btn btn-info">Halaman Baru</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Halaman</div>
						</div>
					</div>
					<div class="card-body">
						<table class="datatable table table-striped" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="10px">No</th>
									<th>Judul Halaman</th>
									<th>URL Slug</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th width="10px">No</th>
									<th>Judul Halaman</th>
									<th>URL Slug</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php
									$no = 1;
									foreach($pages as $pag){
								?>
								<tr>
									<td><?php echo $no++ ;?></td>
									<td><?php echo $pag->page_title;?></td>
									<td><?php echo base_url().'pages/'.$pag->page_slug; ?></td>
									<td>
										<a target="_blank" href="<?php echo base_url().'page/'.$pag->page_slug; ?>" class="btn btn-xs btn-primary"> <i class="fa fa-eye"></i> </a>
										<a href="<?php echo base_url().'admin/pages/edit/'.$pag->page_id; ?>" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> </a>
										<a href="<?php echo base_url().'admin/pages/del/'.$pag->page_id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
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