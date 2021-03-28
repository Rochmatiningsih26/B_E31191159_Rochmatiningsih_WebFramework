<!DOCTYPE html>
<html>
<head>
	<title>Minggu_8_WEB_Framework</title>
</head>
<body>
<?php 
	echo "<b><h3> Daftar Program Studi Jurusan Teknologi Informatika </h3></b> ";
	echo "<table border = '1'";
	echo "<tr>";
	echo "<th> Prodi </th>";
	echo "<th> Keterangan </th>";
	echo "</tr>";
	foreach ($Prodi as $row) 
	{
		echo "<tr>";
		echo "<td>". $row['prodi']."</td>";
		echo "<td>". $row['keterangan']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</br>";
 ?>
</body>
</html>