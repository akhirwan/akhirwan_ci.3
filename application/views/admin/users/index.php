<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<a href="<?php echo base_url().'admin/users/add' ?>" class="btn btn-info">User Baru</a>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Users Management</div>
						</div>
					</div>
					<div class="card-body">
						<table class="datatable table table-striped" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="10px">No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Username</th>
									<th>Level</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th width="10px">No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Username</th>
									<th>Level</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php
									$no = 1;
									foreach($user as $u){
								?>
								<tr>
									<td><?php echo $no++ ;?></td>
									<td><?php echo $u->name;?></td>
									<td><?php echo $u->email;?></td>
									<td><?php echo $u->phone;?></td>
									<td><?php echo $u->address;?></td>
									<td><?php echo $u->username;?></td>
									<td><?php echo $u->level;?></td>
									<td>
										<?php if($u->user_status == 1){
											echo "aktif";
										} else {
											echo "Non Aktif";
										}
										?>
									</td>
									<td>
										<a href="<?php echo base_url().'admin/users/edit/'.$u->uid; ?>" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> </a>
										<a href="<?php echo base_url().'admin/users/del/'.$u->uid; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> </a>
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