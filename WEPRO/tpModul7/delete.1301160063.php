<?php 
	include "connect_1301160063.php";
	$query = mysqli_query($conn, "DELETE * from mahasiswa where nim = '".$_GET['nim']."'");
	if ($query) {
		# code...
		echo "sudah dihapus ya..";
	}
	else echo "ga jadi di hapus.."; 

	echo "<br><br><a href = 'view_1301160063.php'> Lihat Data </a> ";

 ?>

