<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h2><span class="glyphicon glyphicon-bullhorn"></span> Product Reviews <small class="text-muted"><i>People who left product reviews appear here.</i></small></h2>

	
	<table class="table table-hover">
		<tr>
			<th>Sr. No</th>
			<th>Book Title</th>
			<th>Reviewer name</th>
			<th>Subject</th>
			<th>Description</th>
			<th>Rating</th>
		</tr>

		<?php foreach ($results as $val) { ?>
		<tr>
			<td><a data-toggle="modal" href='#<?php echo $val->rev_id; ?>'><?php echo $val->rev_id; ?></td>
			<td><?php echo word_limiter($val->book_title, 5); ?></td>
			<td><?php echo $val->rev_name; ?></td>
			<td><?php $string2 = $val->rev_subject; echo word_limiter($string2, 5); ?></td>
			<td><?php $string = $val->rev_desc;
					  echo word_limiter($string, 4); ?> </a></td>
			<td>
			<?php for ($i=1; $i <= 5; $i++) { ?>
	    			<?php if ($i <= $val->rev_rating) { ?>
	    				<span class="glyphicon glyphicon-star"></span>
	    			<?php } else { ?>
	    				<span class="glyphicon glyphicon-star-empty"></span>
	    			<?php } ?>
			<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	
	<?php 
		$page = $this->uri->segment(3);
		$noOfPagesReq = $results_count_total/10;
		$noOfPagesReq = (int) ($noOfPagesReq - 1);
		
		if($page === 0 || !($this->uri->segment(3)))
		{
			$showPrevious = FALSE;
			$liClassPrev = "disabled";
			$linkPrev = "#";
		}	
		else
		{
			$liClassPrev = "";
			$showPrevious = TRUE;
			$linkPrev = $page - 1;
		}

		if($page == $noOfPagesReq)
		{
			$liClassNext = "disabled";
			$showNext = FALSE;
			$linkNext = "#";
		}
		else
		{
			$liClassNext = "";
			$showNext = TRUE;
			$linkNext = $page + 1;
		}

	 ?>

	<ul class="pager">
		<li class="<?php echo $liClassPrev; ?>"><a href="<?php echo base_url(); ?>superuser/reviews/<?php echo $linkPrev; ?>">Previous</a></li>
		<li class="<?php echo $liClassNext; ?>"><a href="<?php echo base_url(); ?>superuser/reviews/<?php echo $linkNext; ?>">Next</a></li>
	</ul>

</div>
		<?php foreach ($results as $val) { ?>


<div class="modal fade" id="<?php echo $val->rev_id; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Book Title: <b><?php echo $val->book_title; ?></b></h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" role="form">
					<div class="form-group">
						<label for="f1">Review id</label>
						<input type="text" class="form-control" id="f1" disabled value="<?php echo $val->rev_id; ?>">
						
						<label for="f2">Reviewer Name</label>
						<input type="text" class="form-control" id="f2" disabled value="<?php echo $val->rev_name; ?>">

						<label for="f3">Subject</label>
						<input type="text" class="form-control" id="f3" disabled value="<?php echo $val->rev_subject; ?>">

						<label for="f4">Review Rating</label>
						<div id="f4">
							
						<?php for ($i=1; $i <= 5; $i++) { ?>
				        			<?php if ($i <= $val->rev_rating) { ?>
				        				<span class="glyphicon glyphicon-star"></span>
				        			<?php } else { ?>
				        				<span class="glyphicon glyphicon-star-empty"></span>
				        			<?php } ?>
							<?php } ?>

						</div>

						<label for="f5">Description</label>
						<textarea class="form-control" id="f5" disabled><?php echo $val->rev_desc; ?></textarea>
						
						<label for="f6">Date</label>
						<input type="text" class="form-control" id="f6" disabled value="<?php echo $val->rev_date; ?>">

					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		<?php } ?>