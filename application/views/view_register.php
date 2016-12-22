<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page | View All Products</title>
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
			<h1>Member Table</h1>
		<table id="myTable" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Username</th>
					<th>Groups</th>
					<th>
						<?php echo anchor('admin/register/create','Add Product', ['class'=>'btn btn-primary btn-sm']); ?>

					</th>	 
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($member as $data) :  ?>
				<tr>
					<td><?php echo $data->id; ?></td>
					<td><?php echo $data->nama_lengkap; ?></td>
					<td><?php echo $data->username; ?></td>
					<td><?php echo $data->groups; ?></td>
				
					<th>
						<?php echo anchor('admin/register/update/'.$data->id,'Edit', ['class'=>'btn btn-primary btn-sm']); ?>
						<?php echo anchor('admin/register/delete/'.$data->id,'Delete', ['class'=>'btn btn-danger btn-sm',
							'onclick'=>'return confirm(\'Apakah anda yakin\')']); ?>
					</th>	 
				
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