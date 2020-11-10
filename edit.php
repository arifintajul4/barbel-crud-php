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
	<?php 
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
	?>
	<div class="container mt-3">
		<h2>Ubah Data Mahasiswa</h2>
		<form action="proses/editdata.php" method="POST">
			<div class="form-group">
				<label for="nim">NIM</label>
				<input type="text" name="nim" id="nim" class="form-control" value="<?= $data['nim'] ?>" readonly>
			</div>
			<div class="form-group">
				<label for="nama">nama</label>
				<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>" required>
			</div>
			<div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin</label>
				<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
					<option value="L" <?= ($data['jenis_kelamin'] == 'L')?'selected':'' ?> >Laki-laki</option>
					<option value="P" <?= ($data['jenis_kelamin'] == 'P')?'selected':'' ?> >Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label for="no_telp">Nomor Telepon</label>
				<input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $data['no_telp'] ?>" required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
		</form>
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>