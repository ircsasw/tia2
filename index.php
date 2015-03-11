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
  <meta charset = "utf-8">

  <title> Mi Blog</title>
</head>
<body>
<<<<<<< HEAD
	<h1> Bienvenido a mi blog  </h1>
=======
	<h1> Bienvenido al blog del equipo 2 </h1>
	<a herf="login.php"> login </a>
>>>>>>> 85675a889599c8174159a20328ba5fdf07be8ed0
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

</body>
</html>
<<<<<<< HEAD
=======
=======
>>>>>>> db50784d5105ca61c5d031f579d4cf6bd08acbbb
				?>
	</table>  -->

	<table border="1">
		<?php $row = mysql_fetch_array($rs_temas) ?>
		<tr> 

<<<<<<< HEAD
=======
			<td colspan="3"> <?php echo $row["titulo"]; ?> </td> <td> <input type="submit" name="comentar" value="comentar"> <input type="submit" name="editar" value="editar"> <input type="submit" name="borrar" value="borrar"> </td>
<<<<<<< HEAD


>>>>>>> 633e2fc528a6c59305727acd720dcd6c58f4e6b7
			<td colspan="3"> </td> 
			<td> </td>

			<td colspan="3"> titulo1</td> <td> <input type="submit" name="comentar" value="comentar"> <input type="submit" name="editar" value="editar"> <input type="submit" name="borrar" value="borrar"> </td>


=======
>>>>>>> c1d42aa56e76f4413abf61bf77746a25dc291a8b
		</tr>

		<tr>
			<td colspan="4"> <?php echo $row["id_usuario"]; ?> - <?php echo $row["fecha_pub"]; ?> </td>
		</tr>
		<tr>
			<td colspan="4"> <?php echo $row["contenido"]; ?></td>
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




>>>>>>> 633e2fc528a6c59305727acd720dcd6c58f4e6b7
</body>
</html>
<<<<<<< HEAD
=======


>>>>>>> db50784d5105ca61c5d031f579d4cf6bd08acbbb
