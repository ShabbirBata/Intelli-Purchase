<div class="container">
<?php foreach ($result_book as $key) { 
	$title = $key->book_title;
	$author = $key->book_author;
	$desc = $key->book_desc;
	$publisher = $key->book_publisher;
	$isbn = $key->book_isbn;
	$pages = $key->book_noofpages;
	$pubyear = $key->book_pubyear;
	$binding = $key->book_binding;
	$bookid = $key->book_id;
	$img = $key->book_image;
}
	?>
	<form action="<?php echo base_url(); ?>index.php/search/index" method="POST" role="form">	
		<div class="form-group">
			<div class="col-lg-6">
			     <div class="input-group">
				      	<div class="input-group-btn">
				      		<a class="btn btn-default" id="submit-search" href="<?php echo base_url(); ?>index.php/books/home"><span class="glyphicon glyphicon-book"></span> Books</a>
				      	</div><!-- /btn-group -->
				      	<input type="text" class="form-control" placeholder="Enter a product name to search" id="search-bar" name="search">
				      	<div class="input-group-btn">
				      		<button type="submit" class="btn btn-default" id="submit-search">
				      			<span class="glyphicon glyphicon-search"></span>
				      		</button>
				      	</div>
				    </div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div>
	</form>
	
	<div class="product-breadcrumbs">
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/books/home">Books</a>
			</li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<img src="<?php echo $img; ?>" alt="" class="img-thumbnail">
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="product-title-header">
					<h2><?php echo $title; ?></h2>
				</div>
				<div class="product-author-header">
					<form action="<?php echo base_url();?>index.php/search/author" method="POST">
						<input type="hidden" value="<?php echo $author; ?>" name="author">
						<button type="submit" class="searcher"><?php echo $author; ?></button>
					</form>
				</div>
				<div class="product-intelli-price">
				 <?php 		//intelliPrice Calculation goes here
				 			foreach ($results2 as $key2) {
				 				
				 			$price1 = $key2->store1_price;
							$price2 = $key2->store2_price;
							$price3 = $key2->store3_price;

							$store1ship = $key2->store1_shipping;
							$store2ship = $key2->store2_shipping;
							$store3ship = $key2->store3_shipping;
				 			}

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
 ?>
					intelliPrice: Rs <?php echo $display; ?>
				</div>
				
				<div class="product-tags">
					<span class="label label-success"><span class="glyphicon glyphicon-tags"></span> <?php echo $author; ?></span>
					<span class="label label-info"><span class="glyphicon glyphicon-tags"></span> <?php echo $publisher; ?></span>
					<span class="label label-primary"><span class="glyphicon glyphicon-tags"></span> <?php echo $binding; ?></span>
					<span class="label label-danger"><span class="glyphicon glyphicon-tags"></span> <?php echo $pubyear; ?></span>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<hr>
			<div class="book-details">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Book Price
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        <table class="table table-hover">
				        	<thead>
				        		<tr>
				        			<th>Store</th>
				        			<th>Price</th>	
				        			<th>Delivery Time</th>
				        			<th>Shipping Cost</th>
				        			<th>Details</th>
				        		</tr>
				        	</thead>
				        	<tbody>
				        		<?php foreach ($results2 as $key) { 
				        			$store1 = $key->store1_price;
				        			$store2 = $key->store2_price;
				        			$store3 = $key->store3_price;

				        			$store1del = $key->store1_delivery;
				        			$store2del = $key->store2_delivery;
				        			$store3del = $key->store3_delivery;
				        			
				        			$store1ship = $key->store1_shipping;
				        			$store2ship = $key->store2_shipping;
				        			$store3ship = $key->store3_shipping;
				        			
					        		$baseurl = base_url();

				        			$store1url = $key->store1_url;
				        			$store2url = $key->store2_url;
					        		$store3url = $key->store3_url;

				        		 } ?>
				        		<tr>
				        			<form action="<?php echo base_url();?>index.php/redirect/index" method="POST">
				        			<td><img src="<?php echo base_url(); ?>images/store/flipkart.png" alt=""></td>
				        			<td><strong><?php echo $store2; ?></strong></td>
				        			<td><?php echo $store2del; ?></td>
				        			<td><?php echo $store2ship; ?></td>
				        			<input type="hidden" name="url" value="<?php echo $store2url; ?>">
				        			<td><button class="btn btn-details" type="submit">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        			</form>
				        		</tr>
				        		<tr>
				        			<form action="<?php echo base_url();?>index.php/redirect/index" method="POST">
				        			<td><img src="<?php echo base_url(); ?>images/store/uread.png" alt=""></td>
				        			<td><strong><?php echo $store1; ?></strong></td>
				        			<td><?php echo $store1del; ?></td>
				        			<td><?php echo $store1ship; ?></td>
				        			<input type="hidden" name="url" value="<?php echo $store1url; ?>">
				        			<td><button class="btn btn-details" type="submit">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        			</form>
				        		</tr>
				        		<tr>
				        			<form action="<?php echo base_url();?>index.php/redirect/index" method="POST">
				        			<td><img src="<?php echo base_url(); ?>images/store/crossword.png" alt=""></td>
				        			<td><strong><?php echo $store3; ?></strong></td>
				        			<td><?php echo $store3del; ?></td>
				        			<td><?php echo $store3ship; ?></td>
				        			<input type="hidden" name="url" value="<?php echo $store3url; ?>">
				        			<td><button class="btn btn-details" type="submit">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        			</form>
				        		</tr>
				        	</tbody>
				        </table>	
				      </div>
				    </div>
				  </div>

				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Book Details
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				       <table class="table table-hover">
				       	<thead>
				       		<tr>
				       			<th>Author</th>
				       			<td><?php echo $author; ?></td>
				       		</tr>
				       	</thead>
				       	<tbody>
				       		<tr>
				       			<th>Publisher</th>
				       			<td><?php echo $publisher; ?></td>
				       		</tr>
				       		<tr>
				       			<th>ISBN</th>
				       			<td><?php echo $isbn; ?></td>
				       		</tr>
				       		<tr>
				       			<th>Number of Pages</th>
				       			<td><?php echo $pages; ?></td>
				       		</tr>
							<tr>
				       			<th>Publication Year</th>
				       			<td><?php echo $pubyear; ?></td>
				       		</tr>
				       		<tr>
				       			<th>Binding</th>
				       			<td><?php echo $binding; ?></td>
				       		</tr>		       		
				       	</tbody>
				       </table>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          About the book
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
						<?php echo $desc; ?>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          Book Reviews
				        </a>
				      </h4>
				    </div>
				    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				      <div class="panel-body">
				      <?php
				      if($this->session->userdata('is_logged_in'))
				      	$review = "#write-review";
				      else
				      	$review = "#signin";
				       ?>
				        <button type="button" class="btn btn-details" data-toggle="modal" href="<?php echo $review; ?>"><span class="glyphicon glyphicon-comment"></span> Write a Review</button>&nbsp;<small class="text-muted">(You need to sign in to post a comment)</small><br><br>

						<div class="modal fade" id="write-review">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Write a Review</h4>
									</div>
									<div class="modal-body">
										<form action="<?php echo base_url(); ?>index.php/review/post" method="POST" role="form">
											<div class="form-group">
												<label for="heading">Subject</label>
												<input type="text" name="review-subject" class="form-control" id="heading" placeholder="Enter a subject">
												<label for="desc">Review</label>
												<textarea name="review-desc" id="desc" cols="30" class="form-control" rows="3" placeholder="Describe your review"></textarea>
												<label for="review-rating">Rate this book</label>
												<select name="review-rating" id="review-rating" class="form-control" required="required">
													<option value="1">
														1 star
													</option>
													<option value="2">
														2 stars
													</option>
													<option value="3">
														3 stars
													</option>
													<option value="4">
														4 stars
													</option>
													<option value="5">
														5 stars
													</option>
												</select>
												<input type="hidden" name="uri1" class="form-control" value="<?php $uri1 = $this->uri->segment(1,0);
													echo $uri1; ?>">
												<input type="hidden" name="uri2" class="form-control" value="<?php $uri2 = "fiction"; 
													echo $uri2; ?>">
												<input type="hidden" name="uri3" class="form-control" value="<?php $uri3 = $this->uri->segment(3,0); 
													echo $uri3; ?>">
											</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-details" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-details">Review</button>
										</form>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->


					<?php foreach ($result_reviews as $key) { ?>
					<div class="review">
						<div class="col-sm-10">
				        	<div class="review-heading">
			        			<strong><?php echo $key->rev_subject; ?></strong><br>
							</div>
					        <div class="review-description">
								<?php echo $key->rev_desc; ?>
					        </div>
						</div>
						<div class="col-sm-2">
				        	<img src="<?php echo $key->rev_store_url; ?>" alt="" class="pull-right">
				        </div>
				        <br><br>
				        <div class="review-author pull-right">
				        	<i>
							<?php echo $key->rev_date; ?> | 
				        	by <a href="<?php echo $key->rev_url; ?>"><?php echo $key->rev_name; ?></a>&nbsp; | &nbsp;
							<span class="review-rating">
							
							<?php for ($i=1; $i <= 5; $i++) { ?>
				        			<?php if ($i <= $key->rev_rating) { ?>
				        				<span class="glyphicon glyphicon-star"></span>
				        			<?php } else { ?>
				        				<span class="glyphicon glyphicon-star-empty"></span>
				        			<?php } ?>
							<?php } ?>
							</span>
				        	</i>
				        </div>
				        <br><br>
					</div>
					<?php } ?>
				        				        
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				Most Reviewed books
			</div>
			<div class="panel-body">
			   <div class="related-product">
				   <a href="<?php echo base_url(); ?>index.php/books/index/7"><img src="<?php echo base_url(); ?>images/books/fiction/7.jpg" alt="" class="img-related-products">
				   Your Dreams are Mine Now<br></a>
				   <span class="text-muted">by Ravinder Singh</span>
			   </div>
			   <div class="related-product">
				   <a href="<?php echo base_url(); ?>index.php/books/index/12"><img src="<?php echo base_url(); ?>images/books/fiction/12.jpg" alt="" class="img-related-products">
				   My Name is Abu Salem Paperback<br></a>
				   <span class="text-muted">by S. Hussain Zaidi</span>
			   </div>
			   <div class="related-product">
				   <a href="<?php echo base_url(); ?>index.php/books/index/3"><img src="<?php echo base_url(); ?>images/books/fiction/3.jpg" alt="" class="img-related-products">
				   Long Walk to Freedom<br></a>
				   <span class="text-muted">by Nelson Mandela</span>
			   </div>

			</div>
		</div>

		<div class="panel panel-danger">
			<div class="panel-heading">
				Online Poll
			</div>
			<div class="panel-body">
			   <div class="related-product">
				   <?php 

				   if($poll)
				   {
				   		$msg = "You have already submitted your opinion for this product. Thank you."; 
				   		echo $msg;
				   }
				   else
				   { ?>
				   
				   <span class="glyphicon glyphicon-question-sign"></span>
				   Would you recommend this book?<br>
				   <form action="<?php echo base_url(); ?>index.php/books/poll" method="POST" role="form">
						<div class="radio">
							<label for="inputPoll">
								<input type="radio" name="poll" id="inputPoll" value="Yes">
								Yes
							</label>
						</div>
						<div class="radio">
							<label for="inputPoll2">
								<input type="radio" name="poll" id="inputPoll2" value="No">
								No
							</label>
						</div>
						<input type="hidden" name="book-id" value="<?php echo $bookid; ?>">
						<input type="submit" class="btn btn-details" value="Submit">
				   </form>
				   <?php 
				   } ?>
			   </div>
			   
			</div>
		</div>
	</div>
</div>