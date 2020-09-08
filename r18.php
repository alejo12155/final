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
		<div style="height:80px ;
		 			width:400px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 350px;
				    border-radius: 30px 0px 30px 0px;">
					<h1>	
					<center>¿Quién es este personaje?</center>
					<h1>
					
		
			<form style="margin-left: 100px;" method="POST">

		<input type="submit" name="v52" value="JORGE ELIECER GAITAN" class="v3">

	
	<input type="submit" name="v53" value="JUAN VALDEZ" class="v3">

		
		<input type="submit" name="v54" value="LEON MARIA LOZANO" class="v3">
			</form>	

														<br><br>
				<div style="margin-left: 100px; margin-top: -50PX;">
			<img src="p18.jpeg" class="img">	
								</div>
			   
			            <hr size="3" color="black" class="line" >
			            <marquee class="line">MARCA LA RESPUESTA</marquee>
		             </hr>
		             <hr width="5" size="400" color="black" class="line2" style="margin-left: 500px;">
		        
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

if (isset($_POST['v52']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r19.php?x=$t");
}

  

  if (isset($_POST['v53']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r19.php?x=$t");
}

 


if (isset($_POST['v54']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r19.php?x=$t");
}

  ?>