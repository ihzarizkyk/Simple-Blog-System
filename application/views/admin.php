<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Admin - Crud Blog</title>
</head>
<body>

<div class="container">

	<a href="<?= base_url('Admin/tambah'); ?>" class="btn btn-success mt-3">
			Tulis Artikel
	</a>

	&nbsp;&nbsp;

	<a href="<?= base_url('beranda'); ?>" class="btn btn-dark mt-3">
			Beranda
	</a>

		<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
			<?php 
			$i = 1;
			foreach($blog_tb as $datas): ?>
			<tr>
				<th scope="row"><?= $i++; ?></th>
				<td><?= $datas->judul; ?></td>
				<td>
					<?= anchor('Admin/hapus/'.$datas->id,'Hapus'); ?>
					&nbsp;&nbsp;&nbsp;
					<?= anchor('Admin/ubah/'.$datas->id,'Ubah'); ?>
					
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
		</table>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>