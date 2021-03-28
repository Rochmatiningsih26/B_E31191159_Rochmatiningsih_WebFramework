<!DOCTYPE html>
<html>
<head>
	<title>Minggu_8_WEB_Framework</title>
</head>
<body>
<?php 
	echo "<b><h3> Daftar Angkatan </h3></b>";
	echo "<table border = '1'";
	echo "<tr>";
	echo "<th> Tahun </th>";
	echo "</tr>";
	foreach ($Angkatan as $row) 
	{
		echo "<tr>";
		echo "<td>". $row['tahun']."</td>";
		echo "</tr>";
	}
	echo "</table>";
 ?>
</body>
</html>