

<div class="container">
<nav class="navbar navbar-default navbar-navigation" role="navigation">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="row main-sections">
				<div class="col-sm-4 text-center section1">
					<a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
				</div>

				<div class="col-sm-4 text-center section2">
					<a href="<?php echo base_url(); ?>index.php/home/about"><span class="glyphicon glyphicon-exclamation-sign"></span> About Us</a>
				</div>
				<div class="col-sm-4 text-center section3 active-header">
					<a href="<?php echo base_url(); ?>index.php/home/feedback"><span class="glyphicon glyphicon-bullhorn"></span> Feedback</a>
				</div>
		</div><!-- /.navbar-collapse -->
	</nav>
	<div class="well well-main-about">
		<form action="<?php echo base_url(); ?>index.php/home/send_feedback" method="POST" role="form">
			<legend><span class="glyphicon glyphicon-bullhorn"></span> Give us a Feedback</legend>
		
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name">
			</div>
		
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email">
			</div>

			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" class="form-control" id="subject" name="subject" placeholder="Please enter your subject">
			</div>

			<div class="form-group">
				<label for="query">Query</label>
				<textarea name="query" id="query" class="form-control" cols="30" rows="3" placeholder="Please enter your query here"></textarea>
			</div>									
		
			<button type="submit" class="btn btn-details"><span class="glyphicon glyphicon-upload"></span> Send</button>
		</form>
	</div>
</div>
