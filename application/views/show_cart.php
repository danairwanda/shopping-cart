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
	
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <td>No</td>
        <td>Product</td>
        <td>Qty</td>
        <td>Price</td>
        <td>Subtotal</td>
      </tr>
    </thead>
  <tbody>
  <?php 
    $i=0;
    foreach ($this->cart->contents() as $items) :
      $i++;
   ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $items['name']; ?></td>
      <td><?php echo $items['qty']; ?></td>
      <td align="right"><?php echo number_format($items['price'],0,',','.') ?></td> 
      <td align="right"><?php echo number_format($items['subtotal'],0,',','.') ?></td> 
    </tr>
  <?php endforeach; ?>
  </tbody>
  <tfoot>
      <tr>
        <td align="right" colspan="4">Total</td>
        <td align="right"><?php echo number_format($this->cart->total(),0,',','.'); ?></td>
      </tr>
    </tfoot>  
  </table>
  <div align="center">
      <?php echo anchor('welcome/clear_cart', 'Clear Cart',['class'=>'btn btn-danger']) ?>
      <?php echo anchor(base_url(), 'Continue Shopping',['class'=>'btn btn-primary']) ?>
      <?php echo anchor('order', 'Check Out',['class'=>'btn btn-success']) ?>
  </div>

</body>
</html>