<!DOCTYPE html>
<html>
<head>
	<title>Minggu_8_WEB_Framework</title>
</head>
<body>
<?php 
	echo "<b><h3> Nama Mahasiswa Dan Prodi </h3></b>";
	echo "<table border = '1'";
	echo "<tr>";
	echo "<th> Nama </th>";
	echo "<th> Prodi </th>";
	echo "</tr>";
	foreach ($Mahasiswa as $row) 
	{
		echo "<tr>";
		echo "<td>". $row['nama']."</td>";
		echo "<td>". $row['prodi']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</br>";
 ?>
</body>
</html>