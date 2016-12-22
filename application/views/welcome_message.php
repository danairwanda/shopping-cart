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
	<!-- Tampilkan Semua Produk -->
	<div class="row">
	<!-- Looping Produk -->
	<?php foreach ($product as $data) : ?>
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <?php echo img([
      	'src'		=>	'uploads/' . $data->image,
      	'style'		=>	'max-width: 100%; max-height:250%; height:250px'
      ]) ?>
      <div class="caption">
        <h3 style="min-height:100px"><?php echo $data->name ?></h3>
        <p><?php echo $data->description ?></p>
        <p><?php echo 'Rp.' . $data->price ?></p>
        <p>
        	<?php echo anchor('welcome/add_to_cart/' . $data->id, 'Buy', [
        		'class' => 'btn btn-primary',
        		'role'  => 'button'
        		])?>
        </p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
  <!-- End Looping-->
</div>
</body>
</html>