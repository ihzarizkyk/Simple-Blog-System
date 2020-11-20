<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Ubah Artikel - Crud Blog</title>
</head>
<body>

	<div class="container">
		<h1>
			Edit Artikel
		</h1>

		<div class="row">

			<div class="col sm-6">
		<?php foreach($blog_tb as $data_id): ?>
		<form action="<?= base_url('Admin/update');?>" method="post">
			<div class="form-group sm-6">
				<input type="hidden" name="id" value="<?= $data_id->id;?>">
			</div>
			<div class="form-group sm-6"> 
				<label for="judul">
					Judul :
				</label>
				<input class="form-control" type="text" name="judul" value="<?=$data_id->judul;?>" required>
			</div>
			<div class="form-group">
				<label for="isi">
					Isi :
				</label>
				<textarea class="form-control" name="isi" required><?=$data_id->isi;?></textarea>
			</div>
			<div class="form-group sm-6">
				<button type="submit" name="update" class="btn btn-primary">
					Submit
				</button>
				&nbsp;&nbsp;&nbsp;
				<a href="<?= base_url('Admin'); ?>" class="btn btn-danger">
					Batal
				</a>
			</div>
		</form>
		<?php endforeach; ?>
			</div>

		</div>

	</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>