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
		<div style="height:110px ;
		 			width:400px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 350px;
				    border-radius: 30px 0px 30px 0px;">
					<h1>	
					<center>¿Quién lideró la rebelión de esclavos en Cartagena en 1599?</center>
					<h1>

		
			<form  method="POST">
	
		<center><input type="submit" name="v19" value="EMMY" class="v3"></center>

		
		<center><input type="submit" name="v20" value="KUNTA KINTE" class="v3"></center>

		
		<center><input type="submit" name="v21" value="BENKOS BIOHO" class="v3"></center>
			</form>	

														<br><br>
				<div style="margin-left: -200px; margin-top: -50PX;">
			<img src="p7.jpg" class="img">	
			</div>
			   
			            <hr size="3" color="black" class="line" >
			            <marquee class="line">MARCA LA RESPUESTA</marquee>
		             </hr>
		             <hr width="5" size="400" color="black" class="line2" style="margin-left: 445px;">
		        
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

if (isset($_POST['v19']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r8.php?x=$t");
}

  

  if (isset($_POST['v20']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r8.php?x=$t");
}

 


if (isset($_POST['v21']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r8.php?x=$t");
}

  ?>