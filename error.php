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
			
       <h1>Solo tenias 3 chances<br/></h1>
       </div>
     </div>
    <br>
    <br><br>
</center>
    <center style="margin-left: -180px;"><button name="boton1" class="boton1" >REGRESAR</span></button></center>
   

     <div class="title" style="font-family: cursive; color: white; border-radius: 20%; font-size: 15px; margin-left: 0px; margin-top: -170px;">
     <h1><center><br>PERDISTE</center></h1>
     </form>
 </div>
</body>
</html>
<?php
if (isset($_POST['boton1']))
	 {

	 	$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:index.php?x=$t");
}

?>