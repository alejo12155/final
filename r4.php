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
<div style="height:150px ;
		 			width:400px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 350px;
				    border-radius: 30px 0px 30px 0px;">
					<h1>	
					<center>¿Cómo se llama este colombiano considerado como uno de los padres de la neurociencia?</center>
					<h1>


		
						<form style="margin-top: -20px;" method="POST">
	
	
			<center><input type="submit" name="v10" value="LORENZO GAVIRIA" class="v3"></center>

			
			<center><input type="submit" name="v11" value="ROBINSON BARRERA" class="v3"></center>

			
			<center><input type="submit" name="v12" value="RODOLFO LLINAS" class="v3"></center>
			</form>	
											<br><br>
				<div style="margin-left: -200px; margin-top: -60PX;">
			<img src="p4.jpeg" class="img">	
			
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
	header("location:error.php");
}

if (isset($_POST['v10']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r5.php?x=$t");
}

  

  if (isset($_POST['v11']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r5.php?x=$t");
}

 


if (isset($_POST['v12']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r5.php?x=$t");
}

  ?>