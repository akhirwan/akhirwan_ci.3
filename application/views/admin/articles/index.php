<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/articles/add' ?>" class="btn btn-info">Membuat Artikel Baru</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Artikel</div>
						</div>
					</div>
					<div class="card-body">
						<table class="datatable table table-striped" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="10px">No</th>
									<th>Tanggal</th>
									<th>Artikel</th>
									<th>Author</th>
									<th>Kategori</th>
									<th>Gambar</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th width="10px">No</th>
									<th>Tanggal</th>
									<th>Artikel</th>
									<th>Author</th>
									<th>Kategori</th>
									<th>Gambar</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php
									$no = 1;
									foreach($article as $art){
								?>
								<tr>
									<td><?php echo $no++ ;?></td>
									<td><?php echo date('d M Y H:i', strtotime($art->update)); ?></td>
									<td><?php echo $art->title;?></td>
									<td><?php echo $art->name;?></td>
									<td><?php echo $art->cat_name;?></td>
									<td><img src="<?php echo base_url().'images/articles/'.$art->cover;?>" height="50px"><br/><?php echo $art->cover;?></td>
									<td>
										<?php if($art->status=="publish"){
											echo "<span class='badge success' style='color:white;'>Publish</span>";
										} else {
											echo "<span class='badge danger' style='color:white;'>Draft</span>";
										}?>
									</td>
									<td>
										<a target="_blank" href="<?php echo base_url().$art->slug; ?>" class="btn btn-xs btn-primary">
											<i class="fa fa-eye"></i> 
										</a>
										<?php if($this->session->userdata('level') != "admin"){
											if($this->session->userdata('uid') == $art->author){
											?>
										<a href="<?php echo base_url().'admin/articles/edit/'.$art->id; ?>" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> </a>
										<a href="<?php echo base_url().'admin/articles/del/'.$art->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
										<?php }
										} else { ?>
										<a href="<?php echo base_url().'admin/articles/edit/'.$art->id; ?>" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> </a>
										<a href="<?php echo base_url().'admin/articles/del/'.$art->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
										<?php } ?>
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