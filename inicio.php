<!DOCTYPE html>
<html>
<title>Universo Travels</title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="estiloAgencia.css">
	 <link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	 <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	 <script type="text/javascript" src="materialize/js/materialize.js"></script>
	 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="estilos.css">
	 <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.jpg" />
</head>
<body>



<div class="w3-container w3-padding-32 " >
  <img src="imagenes/banner2.jpg" width="100%" height="150px">
</div>

 <nav>
    <div class="colorMenu nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#"><b>Contactar</b></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=34634798138&text=Hola,%20necesito%20informaci%C3%B3n%20sobre%20un%20billete" ><img src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c543.png" height="35px" width="40px"> +34 634 798 138</a></li>
        <li><a href="https://www.facebook.com/universo.travels.96" ><img src="https://i.pinimg.com/originals/57/98/53/5798533bb3f2a08ee3514f9c6f6e03be.png" height="40px" width="40px">Universo Travels</a></li>
      </ul>
    </div>
  </nav>



<div class="w3-row-padding " >

<div class="divOfertas1 w3-third w3-section">
<div class="w3-card-4">
<img src="ofertasImagenes/fotoOferta1.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Cinque Terre</h4>
<p>The Cinque Terre (five lands) is a portion of the Italian Riviera. The coastline with five villages: Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore
is a UNESCO World Heritage Site.</p>
</div>
</div>
</div>

<div class="formulariosize w3-third w3-section">
<div class="w3-card-4">
<div class="w3-container w3-white">
<p>
	<h3><b>PIDE PRESUPUESTO PARA TU VIAJE</b></h3>
	<p>
		Consulta ahora el precio de tu billete y recibe el presupuesto por whatsApp o llamada telefónica.
	</p>
	<div class="row">
		<form class="col s12"  method="get" action="correo.php">
			<div class="input-field col s6">
          		<input name="nombre" id="nombre" type="text" class="validate">
          		<label for="nombre">Nombre:</label>
       		</div>
        	<div class="input-field col s6">
          		<input name="apellidos" id="apellidos" type="text" class="validate">
          		<label for="apellidos">Apellidos:</label>
        	</div>
			<div class="input-field col s6">
          		<input name="numero" id="numero" type="text" class="validate">
          		<label for="numero">Número de teléfono:</label>
        	</div>
			<div class="input-field col s6">
          		<input name="correo" id="correo" type="text" class="validate">
          		<label for="correo">Correo Electrónico:</label>
        	</div>
			<div class="input-field col s6">
          		<input name="origen" id="origen" type="text" class="validate">
          		<label for="origen">Origen del viaje:</label>
        	</div>
			<div class="input-field col s6">
          		<input name="destino" id="destino" type="text" class="validate">
          		<label for="destino">Destino del viaje: </label>
        	</div>
			<div class="col s6">
				<label for="fechaida">Fecha de ida: </label>
          		<input name="fechaida" id="fechaida" type="date" class="validate">
          		
        	</div>
			<div class=" col s6">
				<label for="fechavuelta">Fecha de vuelta: </label>
          		<input name="fechavuelta" id="fechavuelta" type="date" class="validate">
        	</div>
			<p>
				Recibir el presupuesto por: 
			</p>
			<p>
				<label>
					<input type="radio" value="whatsapp" name="grupo1">
					<span>WhatsApp</span>  
				</label>
				<label>
					<input type="radio" value="llamada" name="grupo1">
					<span>Llamada telefónica</span>
				</label>	
			</p>
			
			<br>
			<br>
			<input type="submit" name="consultar" value="Consultar" class="waves-effect waves-light btn">
		</form>
	</div>
</p>
</div>
</div>
</div>
<?php
  Include ("correo.php");
   if(isset($_POST["consultar"])){
    enviarcorreo();

   }


?>

<div class=" divOfertas2 w3-third w3-section">
<div class="w3-card-4">
<img src="ofertasImagenes/fotoOferta2.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4>Vernazza</h4>
<p>Vernazza is another of the five towns in the region. Vernazza is the fourth town heading north. It has no car traffic, and is one of the truest
"fishing villages" on the Italian Riviera.
</p>
</div>
</div>
</div>


</div>
<div class="w3-row-padding " >

<div class="w3-third w3-section">
<div class="w3-card-4">
<div class="contenedor1">
    <div class="atras1 botones">
      &#60
    </div>
    <div class="adelante1 botones">
      &#62
    </div>
    <img src="img1/img1.jpg" alt="" id="imagen1" class="imgagenclass">
  </div>
</div>
</div>




<div class="w3-third w3-section">
<div class="w3-card-4">
	<iframe  width="590" height="485" src="https://www.youtube.com/embed/-JGanqjhYJk?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="w3-container w3-white">
</div>
</div>
</div>


<div class="w3-third w3-section">
<div class="w3-card-4">
<div class="contenedor2">
    <div class="atras2 botones">
      &#60
    </div>
    <div class="adelante2 botones">
      &#62
    </div>
    <img src="img2/img1.jpg" alt="" id="imagen2" class="imgagenclass">
  </div>
</div>
</div>


</div>


<div class="clasefooter">
<b>Atención los 365 días del año
<img src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c543.png" height="35px" width="40px">
Tel. +34 634 798 138
<img src="https://i.pinimg.com/originals/57/98/53/5798533bb3f2a08ee3514f9c6f6e03be.png" height="40px" width="40px">
Universo Travels
</b>
</div>

<script type="text/javascript" src="javascript.js"></script>
</body>
</html>