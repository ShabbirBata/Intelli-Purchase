<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h2><span class="glyphicon glyphicon-question-sign"></span> User Polls <small class="text-muted"><i>User polls displayed here.</i></small></h2>
	<h4>Would the user recommend the product?</h4>
	<table class="table table-hover">
		<tr>
			<th>Sr. No</th>
			<th>Book Title</th>
			<th>User Name</th>
			<th>Answer</th>
		</tr>

		<?php foreach ($results as $val) { ?>
		<tr>
			<td><?php echo $val->poll_id; ?></td>
			<td><?php echo word_limiter($val->book_title, 5); ?></td>
			<td><?php echo $val->u_name; ?></td>
			<td><?php echo $val->answer; ?></td>
		</tr>
		<?php } ?>

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

	</table>
	<ul class="pager">
		<li class="<?php echo $liClassPrev; ?>"><a href="<?php echo base_url(); ?>superuser/feedback/<?php echo $linkPrev; ?>">Previous</a></li>
		<li class="<?php echo $liClassNext; ?>"><a href="<?php echo base_url(); ?>superuser/feedback/<?php echo $linkNext; ?>">Next</a></li>
	</ul>
</div>
