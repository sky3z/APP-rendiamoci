<?php
	if(isset($_POST['username'])){

	$email = $_POST['username'];
	$password = $_POST['password'];

	session_start();
	$email = stripcslashes($email);
	$password = stripcslashes($password);

	$link = mysqli_connect("localhost", "root", "", "apprendiamoci");
	$query = "SELECT email, password, nome, cognome FROM utenti WHERE email = '$email' AND password = '$password'";

	$result = mysqli_query($link, $query)
			or die("failed to query database".mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['email'] == $email && $row['password'] == $password) {
		$_SESSION["credenziale-user"] = $row['nome']." ".$row['cognome'];
		$_SESSION["mail-user"] = $email;
		header("location: ../Home/index.php");
	}else {
		$_SESSION["err-login"] = "Mail e/o password errata";
		header("location: ../Login/login.php");
	}}
?>
