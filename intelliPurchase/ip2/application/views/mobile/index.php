<div class="container">
<?php foreach ($result_book as $key) { 
	$title = $key->book_title;
	$author = $key->book_author;
	$desc = $key->book_desc;
	$cat = $key->book_cat;
	$publisher = $key->book_publisher;
	$isbn = $key->book_isbn;
	$pages = $key->book_pages;
	$pubyear = $key->book_pubyear;
	$lang = $key->book_lang;
	$binding = $key->book_binding;
	$bookid = $key->book_id;
	$img = $key->book_img;
}
	?>
	<form action="<?php echo base_url(); ?>search/index" method="POST" role="form">	
		<div class="form-group">
			<div class="col-lg-6">
			    <div class="input-group">
			      	<div class="input-group-btn">
			        	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> Categories <span class="caret"></span></button>
				        <ul class="dropdown-menu pull-right">
				          <li><a href="#"><span class="glyphicon glyphicon-book"></span> Books</a></li>
				          <li><a href="#"><span class="glyphicon glyphicon-camera"></span> Electronics</a></li>
				          <li><a href="#"><span class="glyphicon glyphicon-paperclip"></span> Clothings</a></li>
				          <li><a href="#"><span class="glyphicon glyphicon-home"></span> Household</a></li>
				        </ul>
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
				<a href="<?php echo base_url(); ?>index.php/books">Books</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/books/<?php echo $cat; ?>"><?php echo ucfirst($cat); ?></a>
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
					<a href="<?php echo base_url(); ?>index.php/search/author/<?php echo $author; ?>"><?php echo $author; ?></a>
				</div>
				<div class="product-intelli-price">
					intelliPrice: Rs 96
				</div>
				<hr>
				<div class="product-tags">
					<span class="label label-success"><span class="glyphicon glyphicon-tags"></span> <?php echo $author; ?></span>
					<span class="label label-info"><span class="glyphicon glyphicon-tags"></span> <?php echo ucfirst($cat); ?></span>
					<span class="label label-primary"><span class="glyphicon glyphicon-tags"></span> <?php echo $binding; ?></span>
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
				        		<tr>
				        			<td><img src="<?php echo base_url(); ?>images/store/amazon_kindle.png" alt=""></td>
				        			<td><strong>96</strong></td>
				        			<td>Instant Wireless delivery</td>
				        			<td>Free</td>
				        			<td><button class="btn btn-details">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        		</tr>
				        		<tr>
				        			<td><img src="<?php echo base_url(); ?>images/store/amazon.png" alt=""></td>
				        			<td><strong>102</strong></td>
				        			<td>2-3 business days</td>
				        			<td>Free</td>
				        			<td><button class="btn btn-details">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        		</tr>
				        		<tr>
				        			<td><img src="<?php echo base_url(); ?>images/store/flipkart.png" alt=""></td>
				        			<td><strong>102</strong></td>
				        			<td>2-3 business days</td>
				        			<td>Free</td>
				        			<td><button class="btn btn-details">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        		</tr>
				        		<tr>
				        			<td><img src="<?php echo base_url(); ?>images/store/uread.png" alt=""></td>
				        			<td><strong>105</strong></td>
				        			<td>3-4 business days</td>
				        			<td>Rs 30</td>
				        			<td><button class="btn btn-details">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        		</tr>
				        		<tr>
				        			<td><img src="<?php echo base_url(); ?>images/store/landmark.png" alt=""></td>
				        			<td><strong>122</strong></td>
				        			<td>3-6 business days</td>
				        			<td>Free</td>
				        			<td><button class="btn btn-details">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
				        		</tr>
				        		<tr>
				        			<td><img src="<?php echo base_url(); ?>images/store/infibeam.png" alt=""></td>
				        			<td><strong>105</strong></td>
				        			<td>2-3 business days</td>
				        			<td>Rs 45</td>
				        			<td><button class="btn btn-details">Visit Website <span class="glyphicon glyphicon-arrow-right"></span></button></td>
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
				       			<th>Language</th>
				       			<td><?php echo $lang; ?></td>
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
												<input type="hidden" name="uri2" class="form-control" value="<?php $uri2 = $this->uri->segment(2,0); 
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
				Related books
			</div>
			<div class="panel-body">
			   <div class="related-product">
				   <img src="" alt="" class="img-related-products">
				   When Only Love Remains<br>
				   <span class="text-muted">by Durjoy Dutta</span>
			   </div>
			   <div class="related-product">
				   <img src="" alt="" class="img-related-products">
				   Like it happened yesterday<br>
				   <span class="text-muted">by Ravinder Singh</span>
			   </div>
			   <div class="related-product">
				   <img src="" alt="" class="img-related-products">
				   I too had a love story<br>
				   <span class="text-muted">by Ravinder Singh</span>
			   </div>
			   <div class="related-product">
				   <img src="" alt="" class="img-related-products">
				   You're the password to my life<br>
				   <span class="text-muted">by Sudeep Nagarkar</span>
			   </div>
			   <div class="related-product">
				   <img src="" alt="" class="img-related-products">
				   Sorry, You're not my type<br>
				   <span class="text-muted">by Sudeep Nagarkar</span>
			   </div>

			</div>
		</div>
	</div>
</div>