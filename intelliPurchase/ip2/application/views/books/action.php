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
<h3><span class="glyphicon glyphicon-book"></span> Action and Adventure</h3>
<hr>
<form action="<?php echo base_url(); ?>index.php/search/index" method="POST" role="form">	
				<div class="form-group">
				    <div class="input-group">
				      	<div class="input-group-btn">
				        	<a class="btn btn-default" id="submit-search" href="<?php echo base_url(); ?>index.php/books/home"><span class="glyphicon glyphicon-book"></span> Books</a>
				      	</div><!-- /btn-group -->
				      	<input type="text" class="form-control" placeholder="Enter a product name to search" id="search-bar-books" name="search">
				      	<div class="input-group-btn">
				      		<button type="submit" class="btn btn-default" id="submit-search">
				      			<span class="glyphicon glyphicon-search"></span>
				      		</button>
				      	</div>
				    </div><!-- /input-group -->
				</div>
			</form>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li><a href="<?php echo base_url(); ?>index.php/books/home">Books</a></li>
  <li class="active">Action and Adventure</li>
</ol>

<div class="col-sm-12">
	<div class="col-sm-3">
		Filters:
		<hr>
			
			<form action="<?php echo base_url(); ?>index.php/filter/post" method="POST" role="form">
			
			Price:
			<div class="checkbox">
				<label>
					<input type="radio" name="price" value="1">
					Rs. 1 - Rs. 200 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="price" value="201">
					Rs. 201 and above 
				</label>
			</div>
			<br>
			Bindings:
			<div class="checkbox">
				<label>
					<input type="radio" name="binding" value="hardcover">
					Hardcover 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="binding" value="paperback">
					Paperback 
				</label>
			</div>
			
			<br>
			Publication Year:
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="2015">
					2015 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="2014">
					2014 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="2013">
					2013 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="2012">
					2012 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="2011">
					2011 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="2003">
					2003 
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="radio" name="year" value="1995">
					1995 
				</label>
			</div>
			<input type="hidden" name="book_cat" value="act">
			<input type="submit" name="sub" class="btn btn-details" value="Apply Filter">

			</form>

		</div>
	<div class="col-sm-9">
		
	
			<?php $counter1 = 0; ?>
			<div class="row">
				<?php  
				foreach ($results as $key) {

				if($counter1 % 3 == 0 && $counter1 != 0)
				{ ?>
				<div class="row">
			
				<?php } ?>
					<!-- Dynamic Method to arrange the fetched results in a proper layout -->
				<div class="col-lg-4 text-center">
					<div class="product">
						<a href="<?php echo base_url(); ?>index.php/books/index/<?php echo $key->book_id; ?>"><img src="<?php echo base_url(); ?>images/books/fiction/<?php echo $key->book_id; ?>.jpg" alt="" class="img-thumbnail"></a>
						<div class="product-title">
							<a href="<?php echo base_url(); ?>index.php/books/index/<?php echo $key->book_id; ?>"><?php echo $key->book_title; ?></a>
						</div>
						<div class="product-best-price">
							<p>intelliPrice: 
							<?php 
								//intelliPrice Calculation goes here
				 				
				 			$price1 = $key->store1_price;
							$price2 = $key->store2_price;
							$price3 = $key->store3_price;

							$store1ship = $key->store1_shipping;
							$store2ship = $key->store2_shipping;
							$store3ship = $key->store3_shipping;

							if($store1ship == "Free" || $store1ship == "N/A")
								$ship1 = 0;
							else
							{
								$ships1 = explode("Rs ", $store1ship);
								$ship1 = $ships1[1];
							}

							$price1 = $price1 + $ship1;

							if($store2ship == "Free" || $store2ship == "N/A")
								$ship2 = 0;
							else
							{
								$ships2 = explode("Rs ", $store2ship);
								$ship2 = $ships2[1];
							}
							
							$price2 = $price2 + $ship2;

							if($store3ship == "Free" || $store3ship == "N/A")
								$ship3 = 0;
							else
							{
								$ships3 = explode("Rs ", $store3ship);
								$ship3 = $ships3[1];
							}

							$price3 = $price3 + $ship3;

							if($price1 < $price2)
							{
								if($price1 < $price3)
								{
									if($price1 == 0)
										$display = $price3;
									else
										$display = $price1;
								}
								else
								{
									if($price3 == 0)
										$display = $price1;
									else
										$display = $price3;
								}
							}
							else
							{
								if($price2 < $price3)
								{
									if($price2 == 0)
										$display = $price3;
									else
										$display = $price2;
								}
								else
								{
									if($price3 == 0)
										$display = $price2;
									else
										$display = $price3;
								}
							}
							echo $display;
							$counter1++; ?>
							</p>
						</div>
					</div>	
				</div>
				<?php if($counter1 % 3 == 0) { ?>	
			</div>
				<?php }	?>
			<?php } 
			if($counter1 % 3 != 0)
				{
					?>
				</div>
				<?php } ?>	
			
			<?php if(!$results)
			{?>
				<h4 class="text-center">No Results Found..!!</h4>
				</div>
			<?php	} ?>
	</div>
</div>
</div>