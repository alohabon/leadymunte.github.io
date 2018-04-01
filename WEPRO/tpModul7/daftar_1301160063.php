<?php 
	include "connect_1301160063.php";
	$query = mysqli_query($conn, " INSERT INTO mahasiswa (nim,nama) values ('".$_POST["nim"]."','".$_POST["nama"]."')");
	if($query) echo "data berhasil diinput euy";
	else echo "gamasuk woyyy";
	echo "<br> <br><a href = 'view_1301160063.php'>Lihat data</a>";
	
 ?>