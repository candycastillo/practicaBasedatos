

<?php 


 session_start();

$link = mysql_connect('127.0.0.1', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Conexion Exitosa';
mysql_select_db('universidad2') or die('No se pudo seleccionar la base de datos');


$_SESSION['AP'] = $_POST['AP'];
$a = $_POST['AP'];


$_SESSION['AM'] = $_POST['AM'];
$b = $_POST['AM'];


$_SESSION['NAM'] = $_POST['NAM'];
$c = $_POST['NAM'];


$_SESSION['DOM'] = $_POST['DOM'];
$d = $_POST['DOM'];

$_SESSION['COL'] = $_POST['COL'];
$e = $_POST['COL'];

$_SESSION['CP'] = $_POST['CP'];
$f = $_POST['CP'];


$_SESSION['mpio'] = $_POST['mpio'];
$g = $_POST['mpio'];


$_SESSION['edo'] = $_POST['edo'];
$h = $_POST['edo'];




$_SESSION['PAIS'] = $_POST['PAIS'];
$i = $_POST['MAPA'];


$_SESSION['MAPA'] = $_POST['MAPA'];
$j = $_POST['MAPA'];


$_SESSION['TEL'] = $_POST['TEL'];
$k = $_POST['TEL'];


$_SESSION['CEL'] = $_POST['CEL'];
$l = $_POST['CEL'];


$_SESSION['RAD'] = $_POST['RAD'];
$m = $_POST['RAD'];


$_SESSION['MAIL'] = $_POST['MAIL'];
$n = $_POST['MAIL'];


$_SESSION['MAIL'] = $_POST['MAIL'];
$ni= $_POST['OB'];



$sql = "INSERT INTO datos(ap,am,nombre,domicilio,colonia,cp,municipio,estado,pais,mapa,telefono,celular,radio,email,observaciones)VALUES('".$a."', '".$b."', '".$c."', '".$d."', '".$e."', '".$f."', '".$g."' ,'".$h."' ,'".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$ni."')";


$result = mysql_query($sql) or die('Consulta fallida: ' . mysql_error());

return $result;

mysql_close($link);


?>




