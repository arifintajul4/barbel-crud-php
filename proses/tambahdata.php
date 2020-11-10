<?php
include '../koneksi.php';

if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_telp = $_POST['no_telp'];

	$sql   = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, no_telp) 
			  VALUES ('$nim', '$nama', '$jenis_kelamin', '$no_telp')";
	$query = mysqli_query($conn, $sql);
	if($query){
		echo 'data berhasil disimpan';
	}else{
		echo 'data gagal disimpan';
	}
}else{
	header('location: /barbel/index.php');
}
