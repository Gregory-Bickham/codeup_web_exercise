<?php


function pageController()
{
    if(isset($_GET['counter'])){
    	$counter = $_GET['counter'];
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
     
    	<a href="/counter.php?counter=<?= $counter + 1 ?>">Up</a>
    	<a href="/counter.php?counter=<?= $counter - 1 ?>">Down</a>


    </body>
</html>
	