
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
					<div class="col-sm-4 text-center section3">
						<a href="<?php echo base_url(); ?>index.php/home/feedback"><span class="glyphicon glyphicon-bullhorn"></span> Feedback</a>
					</div>
			</div><!-- /.navbar-collapse -->
	</nav>
</div>

<div class="container">
<h3><span class="glyphicon glyphicon-user"></span> <?php 
foreach ($results as $key) {
	echo $key->u_name;
 ?></h3>
<hr>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li class="active">User Profile</li>
</ol>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user-details">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		
			<a href="#edit-image" data-toggle="modal">
			<?php if($key->u_dp == "")
				{
					$url = base_url()."images/user/noimage.jpg";
				}
				else
				{
					$url = $key->u_dp;
				}
				 ?>
				<img src="<?php echo $url; ?>" class="img-responsive user-image" alt="Image not Available" data-toggle="tooltip" data-placement="bottom" title="Click to edit">
<?php } ?>
			</a>
			
			<script>
				$(function () {
				  $('[data-toggle="tooltip"]').tooltip()
				})
			</script>


			<div class="modal fade" id="edit-image">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Choose your Avatar <br><i><small>If you save changes without selecting an avatar, you wont have an avatar.</small></i></h4>
						</div>
						<div class="modal-body">
							<div class="container user-images">
								<form action="<?php echo base_url(); ?>index.php/user/change_dp" method="POST" role="form">						

									<select class="image-picker" name="dp-image">
										<option value=""></option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/1.jpg" value="1">Avatar 1</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/2.jpg" value="2">Avatar 2</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/3.jpg" value="3">Avatar 3</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/4.jpg" value="4">Avatar 4</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/5.jpg" value="5">Avatar 5</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/6.jpg" value="6">Avatar 6</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/7.jpg" value="7">Avatar 7</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/8.jpg" value="8">Avatar 8</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/9.jpg" value="9">Avatar 9</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/10.jpg" value="10">Avatar 10</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/11.jpg" value="11">Avatar 11</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/12.jpg" value="12">Avatar 12</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/13.jpg" value="13">Avatar 13</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/14.jpg" value="14">Avatar 14</option>
										<option data-img-src="<?php echo base_url(); ?>images/avatars/15.jpg" value="15">Avatar 15</option>
									</select>

							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-details" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary btn-details">Save changes</button>
							</form>								
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</div>
<?php 
foreach ($results as $key) { ?>
	
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user-account-details">
				<fieldset>
					<legend>
						User Account Details
						<div class="pull-right">
							<i><a href="#edit" data-toggle="modal" class="edit">Edit</a></i>
						</div>
					</legend>
					<label for="name">Name: </label>
					<span id="name"><?php echo $key->u_name; ?></span>
					<br>
					<label for="name">User Role: </label>
					<span id="name"><?php echo $key->u_role; ?></span>				
					<br>
					<label for="name">Password: </label>
					<span id="name">*******</span>
					<br>
					<label for="name">Email: </label>
					<span id="name"><?php echo $key->u_email; ?></span>
					<br>
					<label for="name">Member Since: </label>
					<span id="name"><?php  $regdate = $key->u_regdate;
						$unix = human_to_unix($regdate);
						$now = time();
						echo timespan($unix, $now);
					 ?></span>	
					<br>
				</fieldset>
			</div>
<?php } ?>

<?php foreach ($results2 as $key) { ?>

			<br>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user-other-details">
				<fieldset>
					<legend>
						Other User Info
						<div class="pull-right">
							<i><a href="#edit2" data-toggle="modal" class="edit">Edit</a></i>
						</div>
					</legend>
					<label for="name">Alternate Email: </label>
					<span id="name"><?php echo $key->u_a_email; ?></span>
					<br>
					<label for="name">Gender: </label>
					<span id="name"><?php echo $key->u_gender; ?></span>
					<br>
					<label for="name">Date of birth: </label>
					<span id="name"><?php echo $key->u_dob; ?></span>
					<br>
					<label for="name">Products Rated: </label>
					<span id="name"><?php echo $key->u_prod_rated; ?></span>			
					<br>
					<label for="name">Reviews Submitted: </label>
					<span id="name"><?php echo $key->u_rev_posted; ?></span>
				</fieldset>
			</div>

<?php } ?>
		</div>

	</div>
</div>
<?php foreach ($results as $key) { ?>
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Account Info <small><i>*If you leave the password field blank, the password wont change.</i></small></h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url(); ?>index.php/user/ai_edit" method="POST" role="form">
				
					<div class="form-group">
						<dl class="dl-horizontal">
							<dt>
								<label for="ai-name">Name</label>
							</dt>
							<dd>
								<input type="text" class="form-control" id="ai-name" name="ai-name" placeholder="Enter your name" value="<?php echo $key->u_name; ?>">
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="ai-role">User Role</label>
							</dt>
							<dd>
								<input type="text" class="form-control" id="ai-role" value="<?php echo $key->u_role; ?>" disabled>
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="ai-pwd">New Password</label>
							</dt>
							<dd>
								<input type="password" class="form-control" id="ai-pwd" name="ai-pwd" placeholder="Enter a new Password">								
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="ai-cpwd">Confirm Password</label>
							</dt>
							<dd>
								<input type="password" class="form-control" id="ai-cpwd" name="ai-cpwd" placeholder="Confirm new Password">
								
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="ai-email">Email</label>
							</dt>
							<dd>
								<input type="email" class="form-control" id="ai-email" name="ai-email" placeholder="Enter your email" value="<?php echo $key->u_email; ?>" disabled>
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="oi-member">Member Since</label>
							</dt>
							<dd>
								<input type="text" id="oi-member" name="oi-member" value="<?php $regdate = $key->u_regdate;
									$unix = human_to_unix($regdate);
									$now = time();
									echo timespan($unix, $now); ?>" disabled>
							</dd>
						</dl>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-details" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-details">Save changes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php } ?>
<?php foreach ($results2 as $key) { ?>
	
<div class="modal fade" id="edit2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Other Info</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url(); ?>index.php/user/oi_edit" method="POST" role="form">
				
					<div class="form-group">
						<dl class="dl-horizontal">
							<dt>
								<label for="oi-aemail">Alternate Email</label>
							</dt>
							<dd>
								<input type="email" class="form-control" id="oi-aemail" name="oi-aemail" placeholder="Enter an alternate email" value="<?php echo $key->u_a_email; ?>">
							</dd>
						</dl>
						<?php 
						if($key->u_gender == "Male")
						{
							$gender = "selected";
							$gender2 = "";
						}
						else
						{
							$gender2 = "selected";
							$gender = "";
						}
						?>
						<dl class="dl-horizontal">
							<dt>
								<label for="oi-gender">Gender</label>
							</dt>
							<dd>
								<select name="oi-gender" id="oi-gender" class="form-control">
									<option value="Male" <?php echo $gender; ?>>Male</option>
									<option value="Female" <?php echo $gender2; ?>>Female</option>
								</select>
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="datetimepicker">Date of Birth</label>
							</dt>
							<dd>
								<input type="text" class="form-control" id="datetimepicker" name="oi-dob" value="<?php echo $key->u_dob; ?>">
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="oi-rated">Products Rated</label>
							</dt>
							<dd>
								<input type="text" id="oi-rated" name="oi-rated" value="<?php echo $key->u_prod_rated; ?>" disabled>
							</dd>
						</dl>

						<dl class="dl-horizontal">
							<dt>
								<label for="oi-reviews">Reviews Submitted</label>
							</dt>
							<dd>
								<input type="text" id="oi-reviews" name="oi-reviews" value="<?php echo $key->u_rev_posted; ?>" disabled>
							</dd>
						</dl>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-details" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-details">Save changes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php 
if($key->u_dob)
	$value =$key->u_dob;
else
	$value ="24/12/1992";
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datetimepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/image-picker.css">
<script src="<?php echo base_url(); ?>js/datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>js/image-picker.js"></script>
<script>
		$('#datetimepicker').datetimepicker({
			value: '<?php echo $value; ?>',
			format: 'd/m/Y',
			formatDate: 'd/m/Y',
			timepicker:false,
			step:30});
</script>
<?php } ?>
<script>
	
$(".image-picker").imagepicker();

</script>