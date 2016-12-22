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
  	
  <?php if ($history != false) : ?>
    <?php echo $this->session->flashdata('message'); ?>
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>Invoice ID</th>
        <th>Invoice Date</th>
        <th>Due Date</th>
        <th>Total Amout</th>
        <th>Status</th>
      </tr>
    </thead>
  <tbody>
  <?php 
    foreach ($history as $row) :
   ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->due_date; ?></td>
        <td><?php echo $row->total; ?></td>
        <td>
            <?php echo $row->status; ?>
            <?php 
              if ($row->status == 'unpaid') {
                echo anchor('customer/payment_confirmation/'.$row->id, 'Confirm Payment',
                  array('class' => 'btn btn-primary btn-xs')
                ); 
              }

            ?>

        </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
  </table>
  <?php else : ?>
    <p align="center">There are no shopping history for you... Shop Now <?php echo anchor('/', 'Shop Now'); ?></p>
  <?php endif; ?>
  </div>

</body>
</html> 