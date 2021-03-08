<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
			<span class="title">Dashboard</span>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Dashboard</div>
						</div>
						<div class="pull-right card-action">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardProfileExample"><i class="fa fa-code"></i></button>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row no-margin no-gap">
							Anda berhasil Login. <br/>
							anda login sebagai <br/>
							Username : <?php echo $this->session->userdata('username') ?> <br/>
							Level : <?php echo $this->session->userdata('level') ?> <br/>
							id pengguna : <?php echo $this->session->userdata('uid') ?> <br/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>