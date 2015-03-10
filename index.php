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
	<h1> Bienvenido al blog del equipo 2 </h1>
	<!--<table border="1">
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
<<<<<<< HEAD
</body>
</html>
				?>
	</table>  -->

	<table border="1">
		<tr> 
<<<<<<< HEAD
			<td colspan="3"> </td> 
			<td> </td>
=======
			<td colspan="3"> titulo1</td> <td> <input type="submit" name="comentar" value="comentar"> <input type="submit" name="editar" value="editar"> <input type="submit" name="borrar" value="borrar"> </td>

		</tr>

		<tr>
			<td colspan="4"> usuario y fecha </td>
		</tr>
		<tr>
			<td colspan="4"> comentario </td>
		</tr>
		<tr>
			<td colspan="4"> <input type="submit" name="Me gusta" value="Me gusta"> </td>
		</tr>
		<tr>
			<td colspan="3"> Usuario y fecha </td> <td> <input type="submit" name="editar" value="editar"> <input type="submit" name="borrar" value="borrar"> </td>
		</tr>
		<tr>
			<td colspan="4"> comentario </td>
		</tr>
	</table>
<<<<<<< HEAD


=======
</body>
</html>


