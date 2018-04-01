<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
	<h3>lihat data</h3>
	<table border="1">
		<tr>
			<td>Nim</td>
			<td>Nama</td>
			<td colspan="2"> Action</td>
		</tr>

		<?php
			include "connect_1301160063.php";
			$query = mysqli_query($conn, "SELECT * from mahasiswa");
			while($data = mysqli_fetch_array($query)){
				echo "<tr><td>".$data['nim']."</td><td>".$data['nama']."</td>";
				echo "<td><a href ='update_1301160063.php?nim=".$data['nim']."'>update</a></td>";
				echo "<td><a href ='hapus_1301160063.php?nim=".$data['nim']."'>delete</a></td><tr>";
			}

		 ?>
	</table> <br><a href="daftar_1301160063.php">Daftar</a>
</body>
</html>