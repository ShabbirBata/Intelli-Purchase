

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
<h3><span class="glyphicon glyphicon-search"></span> Search Results: Books by <?php 
foreach ($result as $key) {
	echo $key->book_author;
 ?></h3>
<hr>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url(); ?>index.php/books/home">Books</a></li>
  <li class="active"><?php echo $key->book_author; } ?></li>
</ol>

<?php foreach ($result as $key) { ?>
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<img src="<?php echo $key->book_image; ?>" alt="" class="img-thumbnail">
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="product-title-header-search">
				<h3><a href="<?php echo base_url('index.php/books/index'); ?><?php echo "/".$key->book_id; ?>"><?php echo $key->book_title; ?></a></h3>
			</div>
			<div class="product-author-header-search">
					<p><?php echo $key->book_author; ?></p>
			</div>			
			<div class="product-tags-search">
				<span class="label label-success"><span class="glyphicon glyphicon-tags"></span> <?php echo $key->book_author; ?></span>
				<span class="label label-info"><span class="glyphicon glyphicon-tags"></span> <?php echo $key->book_publisher; ?></span>
				<span class="label label-primary"><span class="glyphicon glyphicon-tags"></span> <?php echo $key->book_binding; ?></span>
				<br>
				<br>
			</div>
		</div>
	</div>
		<div class="product-desc">
			<h4>Book Description: </h4>
				<?php echo $key->book_desc; ?>
		<hr color="blue">
		</div>

<?php } ?>
</div>

