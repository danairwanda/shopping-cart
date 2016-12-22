<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frond-End Shopping Cart By Dana Irwanda</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<?php $this->load->view('layout/top_menu');  ?>

  <div><?php echo validation_errors(); ?></div>
  <div><?php echo $this->session->flashdata('error'); ?></div>

  
  <?php echo form_open('login', ['class'=>'form-horizontal']); ?>
  
  <div id="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <span class="glyphicon glyphicon-lock"></span>
            Login
          </div>
          <div class="panel-body">
  
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label for="username" class="col-sm-3 control-label"> Username </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                </div>
            </div>
          
            <div class="form-group">
              <label for="password" class="col-sm-3 control-label"> Password </label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
            </div>
        
            <div class="form-group last">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                <button type="submit" class="btn btn-default btn-sm">Reset</button>
              </div>
            </div>
            </form>
            <div class="panel-footer">
            <div class="col-sm-offset-3">
              <?php echo anchor('register', 'Register'); ?>
              </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  </div>
  
    
</body>
</html>