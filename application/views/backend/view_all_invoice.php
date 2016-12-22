<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page | View All Invoices</title>
	<!-- Load Jquery, Bootstrap, dan Datatables dari CDN -->
	<!-- Buka URL ini : http://pastebin.com/index/WeaY5FrA -->
	
	<!-- Load JQuery dari CDN -->
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<!-- Load Datatables dan Bootstrap dari CDN -->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	
</head>
<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1>Invoices Table</h1>
		<table id="myTable" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Invoice ID</th>
					<th>Date</th>
					<th>Due Date</th>
					<th>Status</th>
					<th>Actions</th>
					
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($invoice as $data) :  ?>
				<tr>
					<td><?php echo $data->id; ?></td>
					<td><?php echo $data->date; ?></td>
					<td><?php echo $data->due_date; ?></td>
					<td><?php echo $data->status; ?></td>
					<td>
						<?php echo anchor('admin/invoice/detail/'.$data->id,'Details', ['class'=>'btn btn-primary btn-sm']); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	
		</div>

		<div class="col-md-1"></div>
		
	</div>
		<script>
		$(document).ready(function(){
			$('#myTable').DataTable();
		});
		</script>
	
</body>
</html>