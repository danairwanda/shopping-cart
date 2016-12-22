<?php 
	$id = $register->id;
	if ($this->input->post('is_submitted')) {
		$nama 			= set_value('nama'); 	
		$username 		= set_value('username'); 	
		$password		= set_value('password'); 	
		$groups 		= set_value('groups'); 	
	}
	else
	{
		$nama			= $register->nama_lengkap;
		$username 		= $register->username;
		$password 		= $register->password;
		$groups 		= $register->groups;
	}
 ?>

<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page | Edit Register</title>
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
			<h1>Edit Product</h1>
			<div><?php echo validation_errors(); ?></div>
				<?php echo form_open_multipart('admin/register/update/' . $id, ['class'=>'form-horizontal']) ?>
				  	<div class="form-group">
				    	<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>"  >
				    </div>
				   </div>
				   <div class="form-group">
				    	<label for="username" class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-10">
				    	<textarea class="form-control" name="username"><?php echo $username ?></textarea>
				   </div>
				  </div>
				  <div class="form-group">
				    <label for="password" class="col-sm-2 control-label">password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" name="password" value="<?php echo $password ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="groups" class="col-sm-2 control-label">Groups</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="groups" value="<?php echo $groups ?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    <input type="hidden" name="is_submitted" value="1">
				      <button type="submit" class="btn btn-default">Edit</button>
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