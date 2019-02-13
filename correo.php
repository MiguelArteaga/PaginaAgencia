<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php
	$servername = "localhost";
	$username = "miguel";
	$password = "miguel123";
	$dbname = "agencia";



	$conn = new mysqli($servername, $username, $password, $dbname);
	
	function enviarcorreo(){
		$nombre=$_GET['nombre'];
		$apellido=$_GET['apellidos'];
		$tel=$_GET['numero'];
		$mail=$_GET['correo'];
		$origen=$_GET['origen'];
		$destino=$_GET['destino'];
		$fida=$_GET['fechaida'];
		$fvuelta=$_GET['fechavuelta'];
		$tipoPresu=$_GET['grupo1'];
		/*
		$conn2 = mysqli_connect('localhost','xus','xus123');
		mysqli_select_db($conn2, 'scrum2');
		$consultaem = ("SELECT uid FROM users WHERE email = '$mailUser';");
		$resultatem = mysqli_query($conn2, $consultaem);
		while( $ema = mysqli_fetch_assoc($resultatem)){
			$uidNumber=$ema["uid"];
		};-*/
		$correo = "marcosav1996@gmail.com";
		$titulo = "Consulta Presupuesto ".$apellido;
		$mensaje = "Nombre: ".$nombre."\n"."Apellidos; ".$apellido."\n"."Movil: ".$tel."\n"."Email: ".$mail."\n"."Pais/ciudad Origen: ".$origen."\n"."Pais/ciudad Destino: ".$destino."\n"."Fecha Ida: ".$fida."\n"."Fechas Vuelta: ".$fvuelta."\n"."Pasar Presupuesto: ".$tipoPresu;
		mail($correo,$titulo,$mensaje);
		

		$sql = "INSERT INTO clientes (Nombre, Apellidos, NumeroTelefono, Correo, Origen,Destino,FechaIda,FechaVuelta,Presupuesto ) VALUES ('$nombre','$apellido','$tel','$mail','$origen','$destino','$fida','$fvuelta','$tipoPresu')";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		header("Location:index.php");
			
	}
	enviarcorreo();


 ?>

</html>