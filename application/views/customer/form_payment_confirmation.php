<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
        <title>Payment Confirmation Shopping Cart By Dana Irwanda</title>
          <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
      <?php $this->load->view('layout/top_menu');  ?>

        <div><?php echo validation_errors(); ?></div>
        <div><?php echo $this->session->flashdata('error'); ?></div>

      <?php echo form_open('customer', ['class'=>'form-horizontal']); ?>

    <div id="container">
      <div class="row">
        <div class="col-md-4"></div>
          <div class="col-md-4">
    
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="invoice" class="col-sm-3 control-label"> Invoice ID </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="invoice_id" value="<?php echo($invoice_id != 0?$invoice_id:'');?>">
                  </div>
              </div>
  
              <div class="form-group">
                <label for="password" class="col-sm-3 control-label"> Amount Transfered </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="amount" >
                  </div>
              </div>

              <div class="form-group last">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-success btn-sm"> Confirm My Payment </button>
                </div>
              </div> 
            </form>
          </div>
        </div>
      </div>

    </body>
</html> 