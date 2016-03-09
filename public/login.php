<?php

	require_once 'functions.php'
	
	session_start();
	$sessionId = session_id();
	$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;
	$attemptedUsername = inputHas($username) ? inputGet($username) : '';
	$attemptedPassword = inputHas($password) ? inputGet($password) : '';
	$viewCount++;
	$_SESSION['view_count'] = $viewCount;

	var_dump($_SESSION);

	$username = 'guest';
	$password = 'password';
	$message = "";



	

	if(isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != ""){

		header('Location: /authorized.php');
		die();
	
	} elseif($attemptedUsername == $username && $attemptedPassword == $password){

		$_SESSION['LOGGED_IN_USER'] = $username;
		header('Location: http://codeup.dev/authorized.php');
		die();

	} elseif ($attemptedUsername != '' || $attemptedPassword != ''){

		echo "What's the correct User Name/Password, Lebowski?!";
	} 


?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <form method="POST">
        <label>User Name:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit">
</body>
</html>