<?php

function pageController(){

	$data['title'] = "Riff Raff's Server Name Generator";
	$nouns = ['Bandana', 'Shades', 'Bed Springs', 'Bed Sheets', 'Boxers', 'Lamborghini', 'Versace', 'Pinky Ring', 'Houston Rockets', 'Time Piece', 'Kush', 'Braids', 'Jody Husky'];
	$adjectives = ['Versace'];
	$data = [];
	$data['serverName'] = generateServerName($adjectives, $nouns);
	$serverName = generateServerName($adjectives, $nouns);
	
	return $data;

}

function getRandomElement($array){

	$key = array_rand($array);
	$value = $array[$key];
	return $value; 

}

function generateServerName($adjectives, $nouns){

	$serverName = "Your new server's name is: " . getRandomElement($adjectives) . "-" . getRandomElement($nouns) . " !";

	return $serverName;
}





extract(pageController());

?>


<!doctype HTML>
<html>
<head>
	<title>Riff Raff's Server Name Generator</title>
	<style type="text/css">
		body{

			background-image: url("/img/riff.jpg");
			height: auto;
			width: auto;
			text-align: center;
			text-decoration: bold;
			font-family: Impact;
			text-shadow: 0px 2px white;

		}

		.versace{

		}
	</style>
</head>
<body>

	<h1>Congratulations! Your Versace server is set up.</h1>
	<h2><?php echo $serverName; ?></h2>

</body>
</html>