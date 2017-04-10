<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>intelliPurchase- Search Wisely, Buy Smartly</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fonts.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/star-rating.css">

		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
		<!-- jQuery -->
		<script src="<?php echo base_url();?>js/jquery.js"></script>
		<!-- jQuery UI -->
		<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>js/star-rating.js"></script>
	</head>
	<body>		
		<nav class="navbar navbar-default logo-bar" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url() ?>"><span class="first-half-logo">intelli</span><span class="second-half-logo">Purchase</span></a>
				<span class="tagline pull-right">Search Wisely, Buy Smartly.</span>
			</div>
		</nav>

		<div class="menu-bar">
			<span class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th menu-opener" style="font-size: 20px" data-toggle="tooltip" data-placement="right" title="Click to view menu"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url(); ?>index.php/books/home/"><span class="glyphicon glyphicon-book"></span> Books</a></li>
					<li class="divider"></li>
					<?php
						if($this->session->userdata('is_logged_in'))
						{?>
					<li><a href="<?php echo base_url(); ?>index.php/user/index/<?php $id = $this->session->userdata('u_id');
						echo $id;
					 ?>"><span class="glyphicon glyphicon-user"></span> <?php $name = $this->session->userdata('u_name');
					 	echo $name;
					  ?></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/home/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
						<?php }
						else
						{
					 ?>
					<li><a data-toggle="modal" href="#signin"><span class="glyphicon glyphicon-user"></span> 
					Login/Register</a></li>
					<?php  } ?>
					  <?php 
					 	$role = $this->session->userdata('u_role');
					  	if($role == "Super User")
					  	{?>
					<li class="divider"></li> 
					<li><a href="<?php echo base_url(); ?>index.php/superuser/"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					  	<?php }
					  ?>
				</ul>
			</span>
		</div>
		<div class="modal fade" id="signin">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><i class="fa fa-lock"></i> Sign in</h4>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url(); ?>index.php/login/submit" method="POST" role="form">
							<div class="form-group">
								<label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
								<input type="email" class="form-control" id="email" name="s-email" placeholder="Enter your email">
								<label for="pwd"><span class="glyphicon glyphicon-qrcode"></span> Password</label>
								<input type="password" class="form-control" id="pwd" name="s-pwd" placeholder="Enter your Password">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-details pull-left" data-toggle="modal" href="#register" data-dismiss="modal"><i class="fa fa-users"></i> Sign up</button>
						<button type="submit" class="btn btn-details"><i class="fa fa-key"></i> Sign in</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="register">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><i class="fa fa-users"></i> Sign up</h4>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url(); ?>index.php/register/submit" method="POST" role="form">
							<div class="form-group">
								<label for="name"><span class="fa fa-user"></span> Name</label>
								<input type="name" class="form-control" id="name" name="name" placeholder="Enter your full name">
								<label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
								<label for="pwd-register"><span class="glyphicon glyphicon-qrcode"></span> Password</label>
								<input type="password" class="form-control" id="pwd-register" name="pwd-register" placeholder="Enter your Password">
								<label for="cpwd"><span class="glyphicon glyphicon-lock"></span> Confirm Password</label>
								<input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Confirm your Password">
								<label for="cpwd"><span class="glyphicon glyphicon-barcode"></span> Enter Captcha</label>
								<?php $recaptcha_html = $this->recaptcha->recaptcha_get_html();
									echo $recaptcha_html;
									 ?>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-details pull-left" data-dismiss="modal" data-toggle="modal" href="#signin"><i class="fa fa-key"></i> Sign in</button>
						<button type="submit" class="btn btn-details"><i class="fa fa-users"></i> Sign up</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
<script>
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})	
</script>
