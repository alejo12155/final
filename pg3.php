<?php
$t=$_GET['x'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="esti.css">
</head>
<body style="background-color: #309098">
	<center>
		<form method="POST">
		<div class="title" style="font-family: cursive; height: 100px; width: 250px; background-color: #11296D; color: white; border-radius: 20%; margin-left: 0px;">
			
       <h1>FIN DEL JUEGO<br/></h1>
       </div>
     </div>
    <br>
    <br><br>
</center>
	<form  method="POST">
				<center><input style="margin-left: -20px"; type="submit" name="boton1" class="boton1" value="Regresar" > </center>
				</form>
</body>
</html>
<center>

	<br>
	<br>
<?php

session_start();
error_reporting(0);
$datos=$_SESSION['puntos'];
$datos1=$_SESSION['fallos'];


$sql = "SELECT puntos,fallos  FROM juego WHERE nombre='$t' ";
$ejecutar=mysqli_query($conexion, $sql);
$datos=mysqli_fetch_array($ejecutar);

?>

<div style="font-family: cursive;"><h1>QUERIDO:   <?php echo $t;?><br>
LE INFORMO QUE TUVO:   <?php echo $datos['puntos'];?> PUNTOS<br>
Y TUVO: <?php echo   $datos['fallos']?> FALLO/S<br><br></div>
<div style="font-size: 60px; font-family: cursive; color: white;">
Felicitaciones por llegas hasta aqui
</div>
<?php
if (isset($_POST['boton1']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:index.php?x=$t");
}

?>
</center>


			