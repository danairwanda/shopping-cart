<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page | Add New Product</title>
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
			<h1>Add New Product</h1>
			<div><?php echo validation_errors(); ?></div>
				<?php echo form_open_multipart('admin/product/create', ['class'=>'form-horizontal']) ?>
				  	<div class="form-group">
				    	<label for="name" class="col-sm-2 control-label">Product Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="name" value="<?php set_value('name') ?>"  >
				    </div>
				   </div>
				   <div class="form-group">
				    	<label for="description" class="col-sm-2 control-label">Description</label>
				    <div class="col-sm-10">
				    	<textarea class="form-control" name="description"><?php set_value('description') ?></textarea>
				   </div>
				  </div>
				  <div class="form-group">
				    <label for="price" class="col-sm-2 control-label">Price</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="price" value="<?php set_value('price') ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="stok" class="col-sm-2 control-label">Stock</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="stok" value="<?php set_value('stok') ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="userfile" class="col-sm-2 control-label">Product Image</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control" name="userfile"> 
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Save</button>
				    </div>
				  </div>
			<?php echo form_close(); ?>
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