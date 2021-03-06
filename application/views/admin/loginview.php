<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin V.2 - Free Bootstrap Admin Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/animate.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/bootstrap-switch.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/checkbox3.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/jquery.dataTables.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/dataTables.bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/lib/css/select2.min.css')?>">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/themes/flat-blue.css')?>">
</head>
<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                        <h4 class="login-title">akhirwan.my.id</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
						<?php
							if(isset($_GET['alert'])){
								if($_GET['alert']=="gagal"){
									echo "<div class='alert fresh-color alert-danger' role='alert'><strong>Maaf!</strong> Username & Password Salah.</div>";
								} else if($_GET['alert']=="belum_login"){
									echo "<div class='alert fresh-color alert-warning' role='alert'>Anda Harus Login Terlebih Dulu!</div>";
								} else if($_GET['alert']=="logout"){
									echo "<div class='alert fresh-color alert-success' role='alert'>Anda Telah Logout!</div>";
								}
							}
						?>
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Log In...
                                </div>
                            </div>
                            <form action="<?php echo base_url().'admin/Login/action'?>" method="post">
                                <div class="control">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
								<?php echo form_error('username');?>
                                <div class="control">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
								<?php echo form_error('password'); ?>
                                <div class="login-button text-center">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                            </form>
                        </div>
                        <div class="login-footer">
                            <span class="text-right"><a href="#" class="color-white">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Libs -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/Chart.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/bootstrap-switch.min.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/jquery.matchHeight-min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/dataTables.bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/select2.full.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/ace/ace.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/ace/mode-html.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/lib/js/ace/theme-github.js')?>"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/app.js')?>"></script>
</body>

</html>
