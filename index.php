<?php
error_reporting(0);
$t=$_GET['x'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="esti.css">
	<title></title>
</head>

<body style="background-color: #2196A0;text-align: center;">

	
	<div class="general">
     <div class="yes">EL MEJOR</div> 
<div class="yes"> 
  <span>JUEGO DEL AÑO</span>
</div>
	</div>
	
			<div class="typewriter">
				<br><br>
              <h1>Quieres Ser M i l l o n a r i o</h1>
            </div>
			</div>
             <h1>
			<div class="tablas">
				<table border="1" style="margin-left: 150px;">
					<tr>
						<br><br>
						<center><th scope="row">RECORD MUNDIALES</th></center>
					</tr>	
					<tr>
					<td> <center>Julian:250/250</center></td>	
				    </tr>
				    <tr>
					<td> <center>Juancho:250/250</center></td>
					</tr>
					<tr>
					<td> <center>Maria:250/240</center></td>
					</tr>
					<tr>
					<td> <center><?php
					$datos=$_SESSION['puntos'];
				
				
					$sql = "SELECT puntos,fallos  FROM juego WHERE nombre='$t' ";
					$ejecutar=mysqli_query($conexion, $sql);
					$datos=mysqli_fetch_array($ejecutar);

				?>

					<div> <?php echo $t;?>:
 					250/
 					<?php echo $datos['puntos'];
					?></div> </center></td>
					</tr>
				</div>
				</h1> </table>
					
						</table>
						<form method="POST">
						<h5 style="font-family:cursive; color:black; margin-top: 10px;">Digite su nombre
						<br> (No digite 2 veces el mismo nombre, por favor)</h5>

						<input type="text" name="n1" required="">
					       <div>
						<button style="margin-left: -10px;" class="boton1" name="boton1"><span><strong>JUGAR</strong></span></button>
						   </div>
                        <table class="second" style="margin-top: -500px;"><tr>
						<center><th scope="row">INTEGRANTES</th></center>
					</tr>	
						<div>
							<h4>
								<tr>
					<div style="margin-top: 60px; margin-left: -100px;">		
					<td> <center>Juan Pablo Carmona Mejía</center></td>	
				    </tr>
				    <tr>
					<td> <center>Esneider Mosquera Cataño</center></td>
					</tr>
					<tr>
					<td> <center>Alejandro Jiménez Pulgarín</center></td>
					</tr>  <br>
					</div>
								</h4>
						</div>	
						</table>
</form>
<br><br><br>
<?php
$conexion=new mysqli("localhost","root","","final"); 
$sql = "SELECT puntos,fallos  FROM juego WHERE nombre='$t' ";
$ejecutar=mysqli_query($conexion, $sql);
$datos=mysqli_fetch_array($ejecutar);

?>
</body>
</html>
<?php

if (isset($_POST['boton1']))
	 {
	 	$n1=$_POST['n1'];
 		$conexion=new mysqli("localhost","root","","final"); 
  		$sql="INSERT INTO juego (id,nombre,puntos,fallos) VALUES (Null,'$n1','0','0')";
  		$ejecutar=mysqli_query($conexion, $sql);
  		header("location:r1.php?x=$n1");
}




  ?>