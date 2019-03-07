<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<?php
			session_start();
		 ?>
		<div class="w3-row">
			<div class="w3-third">
				<a href="../Home/index.php" class="w3-button w3-xxxlarge w3-left w3-hide-small w3-hover-none w3-margin-left"><span class="fas fa-arrow-left logHom" id="arrow-left"></span></a>
			</div>
			<div class="w3-third">
				<h1 id="logText">LOGIN</h1>
			</div>
		</div>
		<form action="welcome.php" method="post" style="background-color: #C5BAA8" class="w3-card-4 w3-center w3-padding-32 formLogin">
			<div class="w3-container">
    			<i class="fab fa-autoprefixer w3-xxlarge logHom"></i>
			</div>
			<div class="container">
				<?php
                    if(isset($_SESSION["err-login"])){
                        echo "<div class=\" \">";
                        echo $_SESSION["err-login"];
                        unset($_SESSION["err-login"]);
                        echo "</div>";
                    }
                ?>
    			<div class="w3-row w3-section usL">
					<span class="fa fa-user-alt userLogin"></span>
        			<input class="w3-input w3-border usLog" name="username" type="text" placeholder="Username">
      			</div>
				<div class="w3-row w3-section usL">
					<span class="fas fa-lock userLogin"></span>
        			<input class="w3-input w3-border usLog" name="password" type="password" placeholder="Password">
      			</div>
				<div class="w3-container w3-padding-24">
					<input type="submit" value="LOG IN" class="w3-button w3-blue butLog">
				</div>
				<div class="w3-container w3-padding">
					<a href="#"><p class="w3-left">FORGOT PASSWORD?</p></a>
					<a href="../Register/register.php"><p class="w3-right">NEW USER? REGISTER</p></a>
				</div>
    		</div>
  		</form>
		<div class="w3-container w3-center w3-padding-24 copyright">
			<p1>© 2019 APP-rendiamoci. All rights reserved</p1>
		</div>
	</body>
</html>
