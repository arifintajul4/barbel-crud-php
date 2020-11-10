<?php 

$conn = mysqli_connect('localhost', 'root', '', 'barbel');

if(!$conn){
	echo 'Koneksi Gagal';
}