<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'akademik';

	$conn = mysqli_connect($hostname,$username,$password,$database);

	if (!$conn) {
		# code...
		die('ini koneksinya ga nyambung pak').mysqli_error());
	}
	echo "sudah terhubung kok";
 ?>