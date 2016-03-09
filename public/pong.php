<?php

require_once 'functions.php';

function pageController()
{
    if(inputGet($counter)){
    	$counter = inputHas($counter);
    } else{
    	$counter = 0;
    }

    $data = [
    	'counter' => $counter
    ];

    return $data;

}

extract(pageController());

// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
     
    	<a href="/ping.php?counter=<?= $counter + 1 ?>">Hit</a>
    	<a href="/ping.php?counter=0">Miss</a>


    </body>
</html>
	