<?php
$Link = mysql_connect(
"localhost",
"root",
""
);
mysql_select_db(
"tia",
$Link
) OR DIE("Error!!");
$sql_temas = "SELECT * FROM temas";
$rs_temas = mysql_query(
$sql_temas,
$Link) or die(mysql_error());
?>

 
<html>
<head>
	<title>Mi Blog</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>id</th>
			<th>id_usuario</th>
			<th>titulo</th>
			<th>fecha_pub</th>
			<th>contenido</th>
		</tr>
			<?php
				while ($row = mysql_fetch_array($rs_temas))
				{

					echo "<tr>"; 
     				echo "<td>". $row ["id"]."</td";
     				echo "<td>". $row ['id_usuario']."</td";
     				echo "<td>". $row ['titulo']."</td";
     				echo "<td>". $row ['fecha_pub']."</td";
     				echo "<td>". $row ['contenido']."</td";
     				echo "</tr>";
				}
			?>
</body>
</html>
=======
				?>

	<table boder="1">
		<tr> 
			<td colspan="3"> titulo1</td> 
			<td> </td>
		</tr>

		<tr>
			<td colspan="4"> </td>
		</tr>
		<tr>
			<td colespan="4"> </td>
		</tr>
		<tr>
			<td> </td>
		</tr>
		<tr>
			<td colespan="4"> </td>
		</tr>
		<tr>
			<td colespan="4"> </td>
		</tr>
		<tr>
			<td colespan="4"> </td>
		</tr>
	</table>

>>>>>>> 82e329c5711a5a1f1b08f745eecb3ef625da570e

