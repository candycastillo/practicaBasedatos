<html>
<head></head>

<body>


<?php

$link = mysql_connect('127.0.0.1', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Conexion Exitosa';
mysql_select_db('universidad2') or die('No se pudo seleccionar la base de datos');


$_SESSION['ID'] = $_POST['ID'];


$_SESSION['AP'] = $_POST['AP'];



$_SESSION['AM'] = $_POST['AM'];



$_SESSION['NAM'] = $_POST['NAM'];



$_SESSION['DOM'] = $_POST['DOM'];


$_SESSION['COL'] = $_POST['COL'];

$_SESSION['CP'] = $_POST['CP'];



$_SESSION['mpio'] = $_POST['mpio'];



$_SESSION['edo'] = $_POST['edo'];


$_SESSION['PAIS'] = $_POST['PAIS'];



$_SESSION['MAPA'] = $_POST['MAPA'];



$_SESSION['TEL'] = $_POST['TEL'];



$_SESSION['CEL'] = $_POST['CEL'];



$_SESSION['RAD'] = $_POST['RAD'];



$_SESSION['MAIL'] = $_POST['MAIL'];



$_SESSION['OB'] = $_POST['OB'];


$sql = "UPDATE  datos SET 
ap= '".$_POST['AP']."',

am = '".$_POST['AM']."',

nombre = '" .$_POST['NAM']."' ,

domicilio='".$_POST['DOM']."' ,

colonia='".$_POST['COL']."' ,


cp='".$_POST['CP']."' ,
municipio='".$_POST['mpio']."',
 
 estado='".$_POST['edo']."',
 pais='".$_POST['PAIS']."',
mapa='".$_POST['MAPA']."',
telefono='".$_POST['TEL']. "',
celular='".$_POST['CEL']."',
radio='".$_POST['RAD']."',
email='".$_POST['MAIL']."',
observaciones='".$_POST['OB']."' WHERE ID='" .$_POST['ID']."'";

$result= mysql_query($sql) or die(mysql_error());


$result = mysql_query($sql) or die('Consulta fallida: ' . mysql_error());

return $result;

mysql_close($link);







?>
</body>
</html>