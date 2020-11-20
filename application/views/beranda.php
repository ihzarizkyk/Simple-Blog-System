<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Beranda - Crud Blog</title>
</head>
<body>

	<div class="container mt-3">
		<h1>
			<u>CRUD BLOG</u>
		</h1>


		<div class="row">
			<div class="col-sm-8">
		<a href="<?= base_url('Auth'); ?>" class="btn btn-primary mb-2">
			Login
		</a>

		<a href="<?= base_url('Admin'); ?>" class="btn btn-primary mb-2">
			Dashboard
		</a>

		<br>

		<?php foreach($blog_tb as $datas): ?>
		<div class="card mt-3 mb-3">

  		<div class="card-body">

  		<h4 class="card-title">
  			<?= $datas->judul; ?>
  		</h4>
  			<?= substr($datas->isi,0,100)."..."; ?>

  		<br>

  		<a href="<?= base_url("Beranda/artikel/".$datas->id);?>" class="btn btn-outline-success mt-2 btn-sm">
  			Selengkapnya
  		</a>
  		</div>

		</div>
		<?php endforeach; ?>

			</div>
		</div>

	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>