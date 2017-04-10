
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
<h3><span class="glyphicon glyphicon-book"></span> Books</h3>
<hr>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a></li>
  <li class="active">Books</li>
</ol>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		</div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
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
			<h3><a href="<?php echo base_url(); ?>index.php/books/biographies"><span class="glyphicon glyphicon-star"></span> Biographies</a>
			<a class="btn btn-details pull-right" href="<?php echo base_url(); ?>index.php/books/biographies">View More</a>
			</h3>
			<hr>
			<br>
					
			
			<?php 
			$counter=0;
			 ?>
			<div class="row">
				<?php  
				foreach ($results_bio as $key) {

				if($counter % 3 == 0 && $counter != 0)
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
							$counter++; ?>
							</p>
						</div>
					</div>	
				</div>
				<?php if($counter % 3 == 0) { ?>	
			</div>
				<?php }	?>
			<?php } 
			if($counter % 3 != 0)
				{
					?>
				</div>
				<?php } ?>	

			<h3><a href="<?php echo base_url(); ?>index.php/books/action"><span class="glyphicon glyphicon-star"></span> Action and Adventure</a>
			<a class="btn btn-details pull-right" href="<?php echo base_url(); ?>index.php/books/action">View More</a>
			</h3>
			<hr>
			<br>

			<?php $counter1 = 0; ?>
			<div class="row">
				<?php  
				foreach ($results_act as $key) {

				if($counter1 % 3 == 0 && $counter1 != 0)
				{ ?>
				<div class="row">
			
				<?php } ?>
					
				<div class="col-lg-4 text-center">
					<div class="product">
						<a href="<?php echo base_url(); ?>index.php/books/index/<?php echo $key->book_id; ?>"><img src="<?php echo base_url(); ?>images/books/fiction/<?php echo $key->book_id; ?>.jpg" alt="" class="img-thumbnail"></a>
						<div class="product-title">
							<a href="<?php echo base_url(); ?>index.php/books/index/<?php echo $key->book_id; ?>"><?php echo $key->book_title; ?></a>
						</div>
						<div class="product-best-price">
							<p>intelliPrice: 
							<?php 
								
				 				
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

			<h3><a href="<?php echo base_url(); ?>index.php/books/fiction"><span class="glyphicon glyphicon-star"></span> Fiction and Non-Fiction</a>
			<a class="btn btn-details pull-right" href="<?php echo base_url(); ?>index.php/books/fiction">View More</a>
			</h3>
			<hr>
			<br>
			<?php $counter2 = 0; ?>
			<div class="row">
				<?php  
				foreach ($results_fict as $key) {

				if($counter2 % 3 == 0 && $counter2 != 0)
				{ ?>
				<div class="row">
			
				<?php } ?>
					
				<div class="col-lg-4 text-center">
					<div class="product">
						<a href="<?php echo base_url(); ?>index.php/books/index/<?php echo $key->book_id; ?>"><img src="<?php echo base_url(); ?>images/books/fiction/<?php echo $key->book_id; ?>.jpg" alt="" class="img-thumbnail"></a>
						<div class="product-title">
							<a href="<?php echo base_url(); ?>index.php/books/index/<?php echo $key->book_id; ?>"><?php echo $key->book_title; ?></a>
						</div>
						<div class="product-best-price">
							<p>intelliPrice: 
							<?php 
								
				 				
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
							$counter2++; ?>
							</p>
						</div>
					</div>	
				</div>
				<?php if($counter2 % 3 == 0) { ?>	
			</div>
				<?php }	?>
			<?php } 
			if($counter2 % 3 != 0)
				{
					?>
				</div>
				<?php } ?>
		</div></div>
	</div>
</div>
