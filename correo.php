<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellidos'];
	$tel=$_GET['numero'];
	$email=$_GET['correo'];
	$origen=$_GET['origen'];
	$destino=$_GET['destino'];
	$fida=$_GET['fechaida'];
	$fvuelta=$_GET['fechavuelta'];
	$tipoPresu=$_GET['grupo1'];

	echo "Datos <br>";
	echo "<br>";
	echo $nombre;
	echo "<br>";
	echo $apellido;
	echo "<br>";
	echo $tel;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $origen;
	echo "<br>";
	echo $destino;
	echo "<br>";
	echo $fida;
	echo "<br>";
	echo $fvuelta;
	echo "<br>";
	echo $tipoPresu;
	
	function enviarcorreo(){
		/*
		$conn2 = mysqli_connect('localhost','xus','xus123');
		mysqli_select_db($conn2, 'scrum2');
		$consultaem = ("SELECT uid FROM users WHERE email = '$mailUser';");
		$resultatem = mysqli_query($conn2, $consultaem);
		while( $ema = mysqli_fetch_assoc($resultatem)){
			$uidNumber=$ema["uid"];
		};-*/
		$correo = "marcosav1996@gmail.com";
		$titulo = "Consulta Presupuesto";
		$mensaje = "prueba";
		mail($correo,$titulo,$mensaje);
			
	}
	 enviarcorreo();


 ?>

</html>