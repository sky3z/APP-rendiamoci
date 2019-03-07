<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
		<link rel="stylesheet" href="../Login/login.css"/>
	</head>
	<body>
        <?php
            session_start();
        ?>
		<h1 class="w3-margin-top">REGISTER</h1>
		<form action="signin.php" method="post" style="background-color: #C5BAA8" class="w3-card-4 w3-center w3-padding-32 formLogin">
    		<i class="fab fa-autoprefixer w3-xxxlarge logHom"></i>
			<div class="container">
    			<div class="w3-row w3-section usL">
					<span class="fa fa-signature userLogin"></span> <!-- scegliere icona -->
        			<input class="w3-input w3-border usLog" name="name" type="text" placeholder="Name">
      			</div>
				<div class="w3-row w3-section usL">
					<span class="fas fa-id-card userLogin"></span> <!-- scegliere icona -->
        			<input class="w3-input w3-border usLog" name="surname" type="text" placeholder="Surname">
      			</div>
                <?php
                    if(isset($_SESSION["err-mail"])){
                        echo "<div class=\" \">";
                        echo $_SESSION["err-mail"];
                        unset($_SESSION["err-mail"]);
                        echo "</div>";
                    }
                ?>
				<div class="w3-row w3-section usL">
					<span class="fas fa-user-alt userLogin"></span>
        			<input class="w3-input w3-border usLog" name="mail" type="text" placeholder="Mail">
      			</div>
                <?php
                    if(isset($_SESSION["err-paswd"])){
                    echo "<div class=\" \">";
                    echo $_SESSION["err-paswd"];
                    unset($_SESSION["err-paswd"]);
                    echo "</div>";
                    }
                 ?>
				<div class="w3-row w3-section usL">
					<span class="fas fa-lock userLogin"></span>
        			<input class="w3-input w3-border usLog" name="password" type="password" placeholder="Password">
      			</div>
				<div class="w3-row w3-section usL">
					<span class="fas fa-lock userLogin"></span>
        			<input class="w3-input w3-border usLog" name="repeatpassword" type="password" placeholder="Repeat password">
      			</div>
				<div class="w3-container w3-padding-24">
					<input type="submit" value="SIGN IN" class="w3-button w3-blue butLog">
    		    </div>
    			<div class="w3-container w3-padding">
    				<a href="../Login/login.php"><p class="w3-right">LOG IN</p></a>
    			</div>
			</div>
  		</form>
		<div class="w3-container w3-center w3-padding-24 copyright">
			<p1> © 2019 APP-rendiamoci. All rights reserved</p1>
		</div>
	</body>
</html>
