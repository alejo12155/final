<?php
$t=$_GET['x'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title></title>
<body style=" background-color: #ABE2FF;">
		<div style="height:120px ;
		 			width:320px ; 
				    background-color:#5F89D0 ; 
				    margin-left: 350px;
				    border-radius: 30px 0px 30px 0px;">
					<h1>	
					<center>¿Como se llama este templo subterráneo situado en Colombia?</center>
					<h1>
					<br><br>
	
			<form style="margin-top: -80px;" method="POST">
				<center><button name="v4" class="v3">
					LA LLANA 
				</button></center>
					
				<center><button name="v5" class="v3">
					EL ESPEJO
				</button></center>

				<center><button name="v6" class="v3">
					LA CATEDRAL DE LA SAL
				</button></center>

				

			
		</div>
		</form>
				<div style="margin-top: 500PX; margin-left: 180px;">
			<img src="P2.jpg" class="img">	
			</div>
						</div>
			   
			            <hr size="3" color="black" class="line" style="margin-left: 200px;">
			            <marquee class="line" ><h1>MARCA LA RESPUESTA</h1></marquee>
		             </hr>
		             <hr width="5" size="400" color="black" class="line2" style="margin-left: 750px; margin-top: -550px;">
		        
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

if (isset($_POST['v4']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r3.php?x=$t");
}

  

  if (isset($_POST['v5']))
	 {
	 	$sp=$sp+0;
		$c=$c+1;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r3.php?x=$t");
}

 


if (isset($_POST['v6']))
	 {
	 	$sp=$sp+10;
		$c=$c+0;
		$sql = "UPDATE juego SET puntos='$sp', fallos='$c' WHERE nombre='$t' ";
		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r3.php?x=$t");
}

  ?>