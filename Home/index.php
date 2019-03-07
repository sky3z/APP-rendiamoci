<!DOCTYPE html>
<html>
	<head>
		<title>APP-rendiamoci</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
		<link rel="stylesheet" href="stili.css">
	</head>
	<body>
		<?php
		session_start();
		 ?>
	<!-- Navbar (In cima alla pagina) -->
		<div class="w3-top">
			<div class="w3-bar w3-center w3-dark-gray w3-animate-opacity" id="myNavbar">
				<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-left w3-xlarge" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
					<i class="fa fa-bars"></i>
				</a>
				<a href="index.php" class="w3-button w3-padding w3-xlarge w3-hover-none"><i class="fab fa-autoprefixer"></i></a>
				<a href="../Login/login.php" class="w3-button w3-padding w3-xlarge w3-hide-small w3-hover-none w3-right">
					<i class="fa fa-user-alt"></i> <?php if(isset($_SESSION["credenziale-user"])){ echo $_SESSION["credenziale-user"];} ?> </a>
				<a href="../Login/login.php" class="w3-button w3-padding  w3-xlarge w3-hide-medium w3-hide-large w3-right w3-hover-none">
					<i class="fa fa-user-alt"></i> <?php if(isset($_SESSION["credenziale-user"])){ echo $_SESSION["credenziale-user"];} ?></a>
				</a>
			</div>
		</div>

	<!-- Prima immagine parallasse con logo -->
		<div class="bgimg-1 w3-container" id="home">
	  		<div class="w3-display-middle">
	    		<span class="w3-center w3-padding-large w3-dark-gray w3-large w3-wide w3-animate-opacity"> <span class="w3-hide-small">PROJECT</span> APP-RENDIAMOCI</span>
	  		</div>
		</div>
		<div class="w3-container w3-white">
			<div class="w3-row">
				<div class="w3-third">
					<div class="w3-card-4">ciao</div>
				</div>
			</div>
		</div>
		<?php
		session_destroy();
		 ?>
	</body>
</html>
