<div class="container-fluid">
	<div class="side-body padding-top">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'admin/articles' ?>">
					<div class="card red summary-inline">
						<div class="card-body">
							<i class="icon fa fa-newspaper-o fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_articles ?></div>
								<div class="sub-title">Jumlah Artikel</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'admin/categories' ?>">
					<div class="card yellow summary-inline">
						<div class="card-body">
							<i class="icon fa fa-cubes fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_categories ?></div>
								<div class="sub-title">Jumlah Kategori</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'admin/pages' ?>">
					<div class="card green summary-inline">
						<div class="card-body">
							<i class="icon fa fa-tags fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_pages ?></div>
								<div class="sub-title">Jumlah Halaman</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo base_url().'admin/users' ?>">
					<div class="card blue summary-inline">
						<div class="card-body">
							<i class="icon fa fa-users fa-4x"></i>
							<div class="content">
								<div class="title"><?php echo $sum_users ?></div>
								<div class="sub-title">Jumlah User</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-12">
				<div class="card fresh-color card-success">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Selamat Datang ! Anda berhasil Login.</div>
						</div>
						<!--<div class="pull-right card-action">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalCardProfileExample"><i class="fa fa-code"></i></button>
							</div>
						</div>-->
					</div>
					<div class="card-body">
						<div class="row no-margin no-gap">
							<ul class="list-group">
								<li class="list-group-item">Anda login sebagai </li>
								<li class="list-group-item">Username : <b><?php echo $this->session->userdata('username') ?></b> </li>
								<li class="list-group-item">Level : <b><?php echo $this->session->userdata('level') ?></b> </li>
								<li class="list-group-item">id pengguna : <b><?php echo $this->session->userdata('uid') ?></b> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>