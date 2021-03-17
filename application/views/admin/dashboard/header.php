<!DOCTYPE html>
<html>

<head>
    <title><?php echo $config->name ?> - <?php echo $config->description ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link href="<?php echo base_url().'/images/website/'.$config->logo; ?>" rel="icon">
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
	<!-- TINYMCE SETTING -->
	<script type="text/javascript" src="<?php echo base_url('assets/admin/tinymce/js/tinymce/tinymce.min.js');?>"></script>
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li><?php echo $this->session->userdata('level') ?></li>
                            <li class="active"><?php echo $this->session->userdata('name') ?></li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    No new notification
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                            <ul class="dropdown-menu danger  animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">4</span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item message">
                                                view all
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('username') ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="<?php echo base_url('assets/admin/img/profile/picjumbo.com_HNCK4153_resize.jpg')?>" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"><?php echo $this->session->userdata('name') ?></h4>
                                        <p><?php echo $this->session->userdata('email') ?></p>
                                        <div class="btn-group margin-bottom-2x" role="group">
											<a href="<?php echo base_url().'admin/users/profile' ?>" class="btn btn-default"><i class="fa fa-user-secret"></i> Profile </a>
											<a href="<?php echo base_url().'admin/login/logout' ?>" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-coffee"></div>
                                <div class="title">akhirwan.my.id</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url().'admin/dashboard' ?>">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
							<?php if($this->session->userdata('level') == "admin"){ ?>
                            <li>
                                <a href="<?php echo base_url().'admin/categories' ?>">
                                    <span class="icon fa fa-cubes"></span><span class="title">Categories</span>
                                </a>
                            </li>
							<?php } ?>
                            <li>
                                <a href="<?php echo base_url().'admin/articles' ?>">
                                    <span class="icon fa fa-newspaper-o"></span><span class="title">Articles</span>
                                </a>
                            </li>
							<?php if($this->session->userdata('level') == "admin"){ ?>
                            <li>
                                <a href="<?php echo base_url().'admin/pages' ?>">
                                    <span class="icon fa fa-tags"></span><span class="title">Pages</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'admin/users' ?>">
                                    <span class="icon fa fa-users"></span><span class="title">Users and Role</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'admin/dashboard/config' ?>">
                                    <span class="icon fa fa-cog"></span><span class="title">Configurations</span>
                                </a>
                            </li>
							<?php } ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->