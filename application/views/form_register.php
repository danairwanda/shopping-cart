<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Registration</title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php $this->load->view('layout/top_menu');  ?>
  <p><br/></p>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="panel-heading" style="margin-top:5px;">
            <h3>Register Area</h3>
          </div>
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Full Name</label>
              <div class="col-sm-10">
                <div class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" id="nama" placeholder="Full Name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputUsername" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <div class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
              </div>
            </div>
             
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
              <div class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              </div>
            </div>
             <div class="form-group">
              <label for="inputConfirm" class="col-sm-2 control-label">Confirm</label>
              <div class="col-sm-10">
              <div class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                <input type="password" class="form-control" id="confirm" placeholder="Confirm Password">
              </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Register</button>
                <button type="button" class="btn btn-danger">Back To Login</button>
              </div>
            </div>
          </form>
        </div>
     </div>
    <div class="col-md-2"></div>
  </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>