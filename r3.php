<?php
$t=$_GET['x'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title></title>
</head>
<body style=" background-color: #ABE2FF;">
<form method="POST">
<div style="height:80px ;
		 			width:360px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 350px;
				    border-radius: 30px 0px 30px 0px;">
					<h1>	
					<center>¿Qué significan las siglas AUC?</center>
					<h1>
			
			
			<center><input type="submit" name="v7" class="v3" value="AUTO DEFENSAS UNIDAS DE COLOMBIA"></center>

				<center><input type="submit" name="v8" class="v3" value="ACCIONES UNIDAS CORDIALES"></center>

			
			<center><input type="submit" name="v9" class="v3" value="AMBIENTE UNIDO AL CAMBIO"></center>
			
			<br><br>
			<div style="margin-left: -30px; margin-top: -40px;">
			<img src="p3.png" class="img">

			</div>
			   
			            <hr size="3" color="black" class="line" >
			            <marquee class="line">MARCA LA RESPUESTA</marquee>
		             </hr>
		             <hr width="5" size="400" color="black" class="line2" style="margin-left: 400px;">
		        
		</div>

</form>	
</body>
</html>

<?php
include 'conexion.php';
				
$sql = "SELECT puntos,fallos  FROM juego WHERE nombre='$t' ";
$ejecutar=mysqli_query($conexion, $sql);
$datos=mysqli_fetch_array($ejecutar);
$sp=$datos['puntos'];
$c=$datos['fallos'];

if ($c>=3)
 {
	header("location:error.php?x=$t");
}

if (isset($_POST['v7']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r4.php?x=$t");
}

  

  if (isset($_POST['v8']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r4.php?x=$t");
}

 


if (isset($_POST['v9']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r4.php?x=$t");
}

  ?>