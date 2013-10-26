
<html>
<head></head>
<body>

<?php



class conection{

function mostrar(){

 $link = mysql_connect('127.0.0.1', 'root', '')
     or die('No se pudo conectar: ' . mysql_error());
 echo 'Conexion Exitosa';
 mysql_select_db('universidad2') or die('No se pudo seleccionar la base de datos');

 $query = 'SELECT * FROM datos';
 $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

 echo "<table border='5' cellspacing='10' >";
  echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Apellido Paterno</th>';
                echo '<th>Apellido Materno</th>';
                echo '<th>Nombre</th>';
                echo '<th>Domicilio</th>';
                echo '<th>Colonia</th>';
                echo '<th>C&oacute;digo Postal</th>';
                echo '<th>Municipio</th>';
                echo '<th>Estado</th>';
                echo '<th>Pa&iacute;s</th>';
                echo '<th>Mapa</th>';
                echo '<th>Tel&eacute;fono</th>';
                echo '<th>Celular</th>';
                echo '<th>Radio</th>';
                echo '<th>Email</th>';
                echo '<th>Observaciones</th>';
                echo '<th>saved_at</th>';
                echo '<th>modified_in</th>';
  echo '</tr>';


 while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
{
     echo "<tr>";
     foreach ($line as $col_value) 
     {
         echo "<td>$col_value</td>";
     }
     echo "</tr>";
}
echo "</table>";


mysql_free_result($result);



echo"<form action='./agregar.php' method='POST'>";

echo"<a href= './agregar.php'>  AGREGAR  </a> ";

echo"</form>";

echo"<form action='./edit.php' method='POST'>";

echo"<a href= './edit.php'>  EDITAR  </a> ";

echo"</form>";













mysql_close($link);











}

} 

?>
</body>

</html>