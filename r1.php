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
		<div style="height:100px ;
		 			width:360px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 320px;
				    border-radius: 30px;">
					<h1>	
					<center>¿Cuál es la capital del departamento de Tolima?	</center>
					<h1>
		
		
		<form style="margin-left: 40px;" method="POST">
				<button name="v1" class="v1">
					VICHADA
				</button>
					
				<button name="v2" class="v2">
					IBAGUE
				</button>

				<button name="v3" class="v3">
					ANTIOQUIA
				</button>
			</form>	
			<br>
			<div style="margin-left: -180px;">
			<img src="p1.jpg" class="img">

			</div>
			   
			            <hr size="3" color="black" class="line" >
			            <marquee class="line">MARCA LA RESPUESTA</marquee>
		             </hr>
		             <hr width="5" size="400" color="black" class="line2" >
		        
		</div>

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

if (isset($_POST['v1']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r2.php?x=$t");
}

  

  if (isset($_POST['v2']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r2.php?x=$t");
}

 


if (isset($_POST['v3']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r2.php?x=$t");
}

  ?>

