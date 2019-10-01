<?php
	$conexion=mysqli_connect('localhost', 'root', '', 'restaurante');
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>


<!DOCTYPE html>
<html lang="es">

	<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title>La Magdalena</title>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Owl Carousel -->
<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

<!-- Magnific Popup -->
<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/all.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="shortcut icon" type="image/png" href="img/restaurante/favicon.png">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	
	<body>
	<!-- Header -->
	<header id="home">
	<!-- Background Image -->
	<div class="bg-img" style="background-image: url('./img/restaurante/fondo.jpg');">
	<div class="overlay"></div>
	</div>
	<!-- /Background Image -->
	
	<!-- Nav -->
	<nav id="nav" class="navbar nav-transparent">
	<div class="container">
	
	<div class="navbar-header">
	<!-- Logo -->
	<div class="navbar-brand">
	<a href="index.html">
	<img class="logo" src="img/restaurante/LOGO1.png" alt="logo">
	<img class="logo-alt" src="img/restaurante/LOGO1.png" alt="logo">
	</a>
	</div>
	<!-- /Logo -->
	
	<!-- Collapse nav button -->
	<div class="nav-collapse">
	<span></span>
	</div>
	<!-- /Collapse nav button -->
	</div>
	
	<!--  Main navigation  -->
	<ul class="main-nav nav navbar-nav navbar-right">
	<li><a href="#home">Inicio</a></li>
	<li class="has-dropdown"><a href="#blog">Servicios</a>
	<ul class="dropdown">
	<li><a href="#almuerzos">Almuerzos</a></li>
	<li><a href="#helados">Helados</a></li>
	<li><a href="#eventos">Eventos</a></li>
	</ul>
	</li>
	<li><a href="#contact">Contactanos</a></li>
	<li><a href="vista/login.html">Iniciar Sesión</a></li>
	</ul>
	<!-- /Main navigation -->
	
	</div>
	</nav>
	<!-- /Nav -->
	
	<!-- home wrapper -->
	<div class="home-wrapper">
	<div class="container">
	<div class="row">
	
	<!-- home content -->
	<div class="col-md-10 col-md-offset-1">
	<div class="home-content">
	<u><h1 class="white-text zoom-in" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ">Bienvenido al restaurante "La Magdalena"</h1></u>
	<h2 class="white-text" style="font-family:initial ">Deliciosas comidas hechas en leña
	</h2>
	
	</div>
	</div>
	<!-- /home content -->
	
	</div>
	</div>
	</div>
	<!-- /home wrapper -->
	
	</header>
	<!-- /Header -->
	
	<!-- Service -->
	<div id="almuerzos" class="section md-padding">
	
	<!-- Container -->
	<div class="container">
	
	<!-- Row -->
	<div class="row">
	
	<!-- Section header -->
	<div class="section-header text-center">
	<h2 class="title">  NUESTROS DELICIOSOS ALMUERZOS:</h2>
	</div>
	<!-- /Section header -->
	
	<table class="table table-striped table-dark" id="almuerzo"> 
	<thead>
	<tr>
	<th>#</th>
	<th>Nombre</th>
	<th>Precio</th>
	</tr>
	</thead>
	<tbody>
	<?php
	
	$sql="SELECT * from almuerzo";
	$result=mysqli_query($conexion,$sql);
	
	while($mostrar=mysqli_fetch_array($result)){
		
		
		
		?>
		
		<tr>
		<td><?php echo $mostrar['idalmuerzo'] ?></td>
		<td><?php echo $mostrar['nombrealmuerzo'] ?></td>
		<td><?php echo $mostrar['valor'] ?></td>							
		</tr>
		<?php 
		
	}
	
	?>
	</tbody>
	</table>
	<style>
	#box h4{
		font-weight: bold;
		color: #000000;
	}
	
	
	</style>
	
	<table class="table table-striped">
	
	</table>
	<!-- /Service -->
	<div id="helados" class="section md-padding">
	
	<!-- Container -->
	<div class="container">
	
	<!-- Row -->
	<div class="row">
	
	<!-- Section header -->
	<div class="section-header text-center">
	<h2 class="title">  SNACK FOOD:</h2>
	</div>
	<!-- /Section header -->
	
	<table class="table table-striped table-responsive"> 
	<tr>
	<td>#</td>
	<td>Nombre</td>
	<td>Precio</td>
	</tr>
	
	<?php
	
	$sql="SELECT * from heladeria";
	$result=mysqli_query($conexion,$sql);
	
	while($mostrar=mysqli_fetch_array($result)){
		
		
		
		?>
		
		<tr>
		<td><?php echo $mostrar['idheladeria'] ?></td>
		<td><?php echo $mostrar['nombredelhelado'] ?></td>
		<td><?php echo $mostrar['valor'] ?></td>							
		</tr>
		<?php 
		
	}
	
	?>
	</table>
	
	</div>
	<!-- /Container -->
	
	</div>
	
	<!-- Why Choose Us -->
	<div id="eventos" class="section md-padding bg-grey">
	
	
	<div class="section-header">
	<h2 class="title text-center">Reserva el sitio para eventos</h2>
	</div>
	
	<!-- Container -->
	<div class="container">
	
	<!-- Row -->
	<div class="row">
	
	<!-- why choose us content -->
	<div class="col-md-6">
	<p>Ofrecemos un lugar en excelentes condiciones para ser alquilado para la realización de eventos públicos y privados como lo son:</p>
	<div class="feature">
	<i class="fa fa-check"></i>
	<p>Fiesta de 15 años.</p>
	</div>
	<div class="feature">
	<i class="fa fa-check"></i>
	<p>Fiestas de matrimonios.</p>
	</div>
	<div class="feature">
	<i class="fa fa-check"></i>
	<p>Comuniones.</p>
	</div>
	<div class="feature">
	<i class="fa fa-check"></i>
	<p>Cumpleaños.</p>
	</div>
	<div class="panel-body text-center">
	<div class="text-center col-3">
	<a class="btn btn-primary" href="formulario/vista/form.html">Realizar Reserva</a>
	</div>
	</div>
	</div>
	<!-- /why choose us content -->
	
	<!-- About slider -->
	<div class="col-md-6">
	<div id="about-slider" class="owl-carousel owl-theme">
	<img class="img-responsive" src="./img/restaurante/evento.jpg" alt="">
	<img class="img-responsive" src="./img/.jpg" alt="">
	<img class="img-responsive" src="./img/.jpg" alt="">
	<img class="img-responsive" src="./img/.jpg" alt="">
	
	</div>
	</div>				
	</div>
	
	</div>
	
	
	</div>
	</div>
	
	<div id="contact" class="section md-padding">
	
	<!-- Container -->
	<div class="container">
	
	<!-- Row -->
	<div class="row">
	
	<!-- Section-header -->
	<div class="section-header text-center">
	<h2 class="title">Contáctenos</h2>
	</div>
	<!-- /Section-header -->
	
	<!-- contact -->
	<div class="col-sm-4">
	<div class="contact">
	<i class="fa fa-phone"></i>
	<h3>Teléfono</h3>
	<p>+57 3124809482</p>
	</div>
	</div>
	<!-- /contact -->
	
	<!-- contact -->
	<div class="col-sm-4">
	<div class="contact">
	<i class="fa fa-envelope"></i>
	<h3>E-mail</h3>
	<p>restaurantelamagdalena7@gmail.com</p>
	</div>
	</div>
	<!-- /contact -->
	
	<!-- contact -->
	<div class="col-sm-4">
	<div class="contact">
	<i class="fa fa-map-marker"></i>
	<h3>Dirección</h3>
	<p>Carrera 10116 1F</p>
	</div>
	</div>
	<!-- /contact -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6096770758295!2d-75.29741158573697!3d2.9279970552900774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7487f15837f5%3A0x4994dc1c4ed1113e!2sCra.+1f+%2310-116%2C+Neiva%2C+Huila!5e0!3m2!1ses-419!2sco!4v1559677647059!5m2!1ses-419!2sco" width="1000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		
		
		
		
		
		<br><br><br><br> 	
		<div class="section-header text-center">
		<div class="col-md-8 col-md-offset-2">
		<h2 class="title">Danos tu opinión</h2>
		<form class="contact-form">
		<input type="text" class="input" placeholder="Nombre">
		<input type="email" class="input" placeholder="E-mail">
		<input type="text" class="input" placeholder="Asunto">
		<textarea class="input" placeholder="Mensaje"></textarea>
		<button class="main-btn">Enviar Mensajes</button>
		</form>
		</div>
		<!-- /contact form -->
		</div>
		
		</div>
		<!-- /Row -->
		
		</div>
		<!-- /Container -->
		
		</div>
		<!-- /Contact -->
		
		
		<!-- Footer -->
		<footer id="footer" class="sm-padding bg-dark">
		
		<!-- Container -->
		<div class="container">
		
		<!-- Row -->
		<div class="row">
		
		<div class="col-md-12">
		
		<!-- footer logo -->
		<div class="footer-logo">
		<a href="index.html"><img src="img/restaurante/LOGO1.png" alt="logo"></a>
		</div>
		<!-- /footer logo -->
		
		<!-- footer follow -->
		<ul class="footer-follow">
		<li><a href="#"><i class="fab fa-facebook"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
		<li><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
		<li><a href="#"><i class="fab fa-youtube"></i></a></li>
		</ul>
		<!-- /footer follow -->
		
		
		
		
		</div>
		
		</div>
		<!-- /Row -->
		
		</div>
		<!-- /Container -->
		
		</footer>
		<!-- /Footer -->
		
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- /Back to top -->
		
		<!-- Preloader -->
		<div id="preloader">
		<div class="preloader">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		</div>
		</div>
		<!-- /Preloader -->
		
		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="js/all.js"></script>
		<link rel="stylesheet" href="vista/estilo.css">
		</body>
		
		</html>
		
