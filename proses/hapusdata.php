<?php
include '../koneksi.php';

$nim = $_GET['nim'];
$sql   = "DELETE FROM mahasiswa WHERE nim='$nim'";
$query = mysqli_query($conn, $sql);
if($query){
	echo 'data berhasil dihapus';
}else{
	echo 'data gagal dihapus';
}
