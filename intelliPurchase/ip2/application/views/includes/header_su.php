<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>intelliPurchase- Search Wisely, Buy Smartly</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main_su.css">
		
	</head>
	<body>		
		<nav class="navbar navbar-default logo-bar" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>"><span class="first-half-logo">intelli</span><span class="second-half-logo">Purchase</span></a>
			</div>
			<?php 	//Setting the Active tab in a dynamic template environment
			$current_dashboard = "";
			$current_feedback = "";
			$current_reviews = "";
			$current_poll = "";

			if($active == 'dashboard')
			{	
				$current_dashboard = 'active';
				$current_feedback = '';
				$current_reviews = '';
				$current_poll = "";
			}
			else if($active == 'feedback')
			{	
				$current_feedback = 'active';
				$current_dashboard = '';
				$current_reviews = '';
				$current_poll = "";
			}
			else if($active == 'reviews')
			{
				$current_reviews = 'active';
				$current_feedback = '';
				$current_dashboard = '';
				$current_poll = "";
			}
			else if($active == 'polls')
			{
				$current_poll = "active";
				$current_reviews = '';
				$current_feedback = '';
				$current_dashboard = '';
			}

			 ?>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo $current_dashboard; ?>"><a href="<?php echo base_url(); ?>index.php/superuser/index"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<li class="<?php echo $current_feedback; ?>"><a href="<?php echo base_url(); ?>index.php/superuser/feedback"><span class="glyphicon glyphicon-bullhorn"></span> Feedback</a></li>
					<li class="<?php echo $current_reviews; ?>"><a href="<?php echo base_url(); ?>index.php/superuser/reviews"><span class="glyphicon glyphicon-comment"></span> Recent Reviews</a></li>
					<li class="<?php echo $current_poll; ?>"><a href="<?php echo base_url(); ?>index.php/superuser/poll"><span class="glyphicon glyphicon-question-sign"></span> Online Poll</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> SuperUser <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url(); ?>index.php/home/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
 
 <!-- Main Container Starts Here -->
<div class="container main-dashboard">
