<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Belajar Bareng</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">BARBEL</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Mahasiswa</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div class="container mt-3">
		<h2>Daftar Mahasiswa</h2>
		<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
		<table class="table table-bordered table-striped">
			<thead class="bg-dark text-white">
				<tr>
					<td>NIM</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>No Telepon</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					include 'koneksi.php';
					$sql  = "SELECT * FROM mahasiswa";
					$data = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($data)):
				?>
				<tr>
					<td><?= $row['nim'] ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['jenis_kelamin'] ?></td>
					<td><?= $row['no_telp'] ?></td>
					<td>
						<a class="btn btn-warning" href="edit.php?nim=<?= $row['nim'] ?>">edit</a>
						<a class="btn btn-danger" href="proses/hapusdata.php?nim=<?= $row['nim'] ?>">hapus</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>