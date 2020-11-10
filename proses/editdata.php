<?php
include '../koneksi.php';

if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_telp = $_POST['no_telp'];

	$sql   = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp'
			  WHERE nim='$nim'";
	$query = mysqli_query($conn, $sql);
	if($query){
		echo 'data berhasil ubah';
	}else{
		echo 'data gagal ubah';
	}
}else{
	header('location: /barbel/index.php');
}
