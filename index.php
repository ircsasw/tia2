<?php

	echo "Equipo 2";

?> 
$link = mysql_connect(
        "localhost",
        "root",
        ""
    );

   mysql_select_db(
     	"tia", 
    	$link
   	) or die ("error!!");

   $sql_alumnos = "SELECT * FROM alumnos";
   $rs_alumnos = mysql_query(
   	   $sql_alumnos,
   	   $link) or die(mysql_error());

   while($row=mysql_fetch_array($sr_alumnos))
   echo $row['nombre']."<br>";
 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">

  <title></title>
</head>
     <table border="1"
  <tr>
    <th>alumnos</th>
    <th>usuarioa</th>
    <th>comentarios</th>
    <th>temas</th>
 </tr>

 <?php
   while($row = mysql_fetch_array($rs_alumnos))
   {
     echo "<tr>";
     echo "<td>". $row ['alumnos']. "</td>";
     echo "<td>". $row ['usuarios']. "</td>";
     echo "<td>". $row ['comentarios']. "</td>";
     echo "<td>". $row ['temas']. "</td>";
     echo "</tr>";
  }
?>

</table>

</body>
</html>

