<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h2><span class="glyphicon glyphicon-bullhorn"></span> Feedback <small class="text-muted"><i>People who left us feedback appear here.</i></small></h2>

	
	<table class="table table-hover">
		<tr>
			<th>Sr. No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Query</th>
		</tr>

		<?php foreach ($results as $val) { ?>
		<tr>
			<td><a data-toggle="modal" href='#<?php echo $val->f_id; ?>'><?php echo $val->f_id; ?></td>
			<td><?php echo $val->name; ?></td>
			<td><?php echo $val->email; ?></td>
			<td><?php $string2 = $val->subject; echo word_limiter($string2, 5); ?></td>
			<td><?php $string = $val->query;
					  echo word_limiter($string, 4); ?> </a></td>
		</tr>
		<?php } ?>
	</table>

	<?php 
		$page = $this->uri->segment(3);
		$noOfPagesReq = $results_count_total/10;
		$noOfPagesReq = (int) $noOfPagesReq;
		
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
		<li class="<?php echo $liClassPrev; ?>"><a href="<?php echo base_url(); ?>superuser/feedback/<?php echo $linkPrev; ?>">Previous</a></li>
		<li class="<?php echo $liClassNext; ?>"><a href="<?php echo base_url(); ?>superuser/feedback/<?php echo $linkNext; ?>">Next</a></li>
	</ul>
</div>
		<?php foreach ($results as $val) { ?>


<div class="modal fade" id="<?php echo $val->f_id; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Feedback Details</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" role="form">
					<div class="form-group">
						<label for="f1">Feedback id</label>
						<input type="text" class="form-control" id="f1" disabled value="<?php echo $val->f_id; ?>">
						
						<label for="f2">Name</label>
						<input type="text" class="form-control" id="f2" disabled value="<?php echo $val->name; ?>">

						<label for="f3">Email</label>
						<input type="text" class="form-control" id="f3" disabled value="<?php echo $val->email; ?>">

						<label for="f4">Subject</label>
						<textarea class="form-control" id="f4" disabled><?php echo $val->subject; ?></textarea>


						<label for="f5">Query</label>
						<textarea class="form-control" id="f5" disabled><?php echo $val->query; ?></textarea>

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