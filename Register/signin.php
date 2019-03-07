<?php
	if(isset($_POST['name']) &&
        isset($_POST['surname']) &&
        isset($_POST['mail']) &&
        isset($_POST['password']) &&
        isset($_POST['repeatpassword'])){

        session_start();

        $name = $_POST['name'];
    	$surname = $_POST['surname'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $repeatpassword = $_POST['repeatpassword'];


    	$name = stripcslashes($name);
    	$surname = stripcslashes($surname);
        $mail = stripcslashes($mail);
        $password = stripcslashes($password);
        $repeatpassword = stripcslashes($repeatpassword);

    	$link = mysqli_connect("localhost", "root", "", "apprendiamoci");
    	$query = "SELECT email FROM utenti WHERE email = '$mail'";

    	$result = mysqli_query($link, $query) or die("failed to query database".mysqli_error());
    	$row = mysqli_fetch_array($result);
        print_r($row);
    	if ($row['email'] != $mail){
            if ($password == $repeatpassword ) {
				if(count($password) >= 8){
					$_SESSION["err-paswd"] = "Le password sono diverse ";
	                header("location: ../Register/register.php");
				}
                $query = "INSERT INTO utenti(nome,cognome, email,password) VALUE ('$name','$surname','$mail','$password')";
                mysqli_query($link, $query);
                header("location: ../Home/index.php");
            }else {
                $_SESSION["err-paswd"] = "Le password sono diverse ";
                header("location: ../Register/register.php");
            }
    	}else {
            $_SESSION["err-mail"] = "Mail già in uso";
    		header("location: ../Register/register.php");

        }
    }else {
        echo "Non va";
    }
?>
