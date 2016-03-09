<?php 

	session_start();

	$username = (isset($_POST['username'])) ? $_SESSION['LOGGED_IN_USER'] : "";
	
	if(! isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == ""){

		header('Location: /login.php');
		die();
	
	}

?>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>You have been succesfully authorized.</h1>
</body>
</html>