<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page | View Invoices Details</title>
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
			
		<h3>Items Ordered in Invoice # <?php echo $invoice->id; ?></h3>
		<table id="myTable" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$total = 0;
				foreach ($orders as $data) :  
				$subtotal = $data->qty * $data->price;
				$total += $subtotal; 

				?>
				<tr>
					<td><?php echo $data->product_id; ?></td>
					<td><?php echo $data->product_name; ?></td>
					<td><?php echo $data->qty; ?></td>
					<td><?php echo $data->price; ?></td>
					<td><?php echo $subtotal; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" align="right">Total</td>
					<td>
						<?php echo $total; ?>
					</td>
				</tr>
			</tfoot>
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