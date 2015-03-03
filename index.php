<?php

	echo "Equipo 2";

?>
<html>
<head>
	<title>Mi Blog</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Alumnos</th>
			<th>Comentarios</th>
			<th>Temas</th>
			<th>usuarios</th>
		</tr>
			<?php
				while ($row = mysql_fetch_array($rs_alumnos))
				{
					echo "<tr>";
					echo "<tb>". 
					echo "<tr>";
     				echo "<td>". $row ["Alumnos"]."</td";
     				echo "<td>". $row ['Comentarios']."</td";
     				echo "<td>". $row ['Temas']."</td";
     				echo "<td>". $row ['usuarios']."</td";
     				echo "</tr>";
				}
</body>
</html>

