<div class="container">
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
	</div>

</div>


<div class="container">
	<nav class="navbar navbar-default navbar-navigation" role="navigation">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="row main-sections">
				<div class="col-sm-4 text-center section1 active-header">
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
	<div class="well well-main">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center section-well1">
			<span class="well-main-title">
				Trending Products
			</span>
			<br>
			<div id="carousel-id" class="carousel slide hot-deals" data-ride="carousel">
			    <div class="carousel-inner">
			        <div class="item active">
			            <a href="<?php echo base_url(); ?>index.php/books/index/1" ><img alt="Diary of a Young Girl" src="http://c398754.r54.cf1.rackcdn.com/9789380914312.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			        <div class="item">
			            <a href="<?php echo base_url(); ?>index.php/books/index/3"><img alt="Long Walk to Freedom" src="http://c398754.r54.cf1.rackcdn.com/9780349106533.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			        <div class="item">
			            <a href="<?php echo base_url(); ?>index.php/books/index/8"><img alt="Fifty Shades of Grey" src="<?php echo base_url(); ?>images/books/fiction/8.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center section-well2">
			<span class="well-main-title">
				Most Reviewed Products
			</span>
			<div id="carousel-id" class="carousel slide hot-deals" data-ride="carousel">
			     <div class="carousel-inner">
			        <div class="item active">
			            <a href="<?php echo base_url(); ?>index.php/books/index/7"><img alt="Your Dreams are Mine Now" src="http://c398754.r54.cf1.rackcdn.com/9780143423003.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			        <div class="item">
			            <a href="<?php echo base_url(); ?>index.php/books/index/8"><img alt="Fifty Shades of Grey" src="<?php echo base_url(); ?>images/books/fiction/8.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			        <div class="item">
			            <a href="<?php echo base_url(); ?>index.php/books/index/12"><img alt="My name is Abu Salem" src="http://c398754.r54.cf1.rackcdn.com/9780143423591.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center section-well3">
			<span class="well-main-title">
				Latest Additions
			</span>
			<div id="carousel-id" class="carousel slide hot-deals" data-ride="carousel">
			    <div class="carousel-inner">
			        <div class="item">
			            <a href="<?php echo base_url(); ?>index.php/books/index/7"><img alt="Your Dreams are Mine Now" src="http://c398754.r54.cf1.rackcdn.com/9780143423003.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			       	<div class="item active">
			            <a href="<?php echo base_url(); ?>index.php/books/index/8"><img alt="Fifty Shades of Grey" src="<?php echo base_url(); ?>images/books/fiction/8.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			        <div class="item">
			            <a href="<?php echo base_url(); ?>index.php/books/index/12"><img alt="My name is Abu Salem" src="http://c398754.r54.cf1.rackcdn.com/9780143423591.jpg"></a>
			            <div class="container">
			                <div class="carousel-caption">
			                </div>
			            </div>
			        </div>
			    </div>
			 </div>
		</div>
	</div>
</div>