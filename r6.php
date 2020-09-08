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
		<div style="height:120px ;
		 			width:500px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 300px;
				    border-radius: 30px 0px 30px 0px;">
					<h1>	
					<center>¿Cómo se llama el pacto entre liberales y conservadores que duró desde 1958 hasta 1974?</center>
					<h1>
											
				<form style="margin-left: 10px;"  method="POST">
		
	
		<center><input type="submit" name="v16" value="EL FRENTE NACIONAL" class="v3"></center>

		
		<center><input type="submit" name="v17" value="EL FRENTE RADICAL" class="v3"></center>

		
		<center><input type="submit" name="v18" value="LA UNION POLITICA" class="v3"></center>
			</form>	
			<br>
				<div style="margin-left: -100px; margin-top: -50PX;">
			<img src="p6.jpg" class="img">	
					</div>
			   
			            <hr size="3" color="black" class="line" >
			            <marquee class="line">MARCA LA RESPUESTA</marquee>
		             </hr>
		             <hr width="5" size="400" color="black" class="line2" style="margin-left: 445px;">
		        
		</div>	


		

			<br><br>


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

if (isset($_POST['v16']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r7.php?x=$t");
}

  

  if (isset($_POST['v17']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r7.php?x=$t");
}

 


if (isset($_POST['v18']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r7.php?x=$t");
}

  ?>