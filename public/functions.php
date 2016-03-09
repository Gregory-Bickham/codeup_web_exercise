<?php

//inputHas($key): returns true or false based on whether the key is available.  
function inputHas($key){

	return isset($_REQUEST[$key]);

}

function inputGet($key){

	return $_REQUEST[$key];

}

function escape($input){

	return htmlspecialchars(strip_tags($_REQUEST[$key]));

}


?>