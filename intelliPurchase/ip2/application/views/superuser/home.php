<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h2><span class="glyphicon glyphicon-dashboard"></span> Dashboard <small class="text-muted"><i>Insert Data.</i></small></h2>

	<div class="col-sm-12">
		<div class="col-sm-4">
			<h4 class="text-center">Statistics</h4>
			<div class="panel panel-info">
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Category</th>
								<th>Count</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No of Books in the shop</td>
								<td><?php echo $results; ?></td>
							</tr>
							<tr>
								<td>No of Polls made till time</td>
								<td><?php echo $results1; ?></td>
							</tr>
							<tr>
								<td>No of Reviews made by user</td>
								<td><?php echo $results2; ?></td>
							</tr>
							<tr>
								<td>No of Feedback Submitted by the user</td>
								<td><?php echo $results3; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<h4 class="text-center">Most Recent Books Added</h4>
			<div class="panel panel-primary">
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Book Title</th>
								<th>Book Author</th>
								<th>Book ISBN</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($results4 as $key) { ?>
							<tr>
								<td><?php echo $key->book_title; ?></td>
								<td><?php echo $key->book_author; ?></td>
								<td><?php echo $key->book_isbn; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>