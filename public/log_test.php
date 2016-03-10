<?php  
	
	require_once 'log.php';

	$log = new Log();

	$log->filename = "log-{this->$todayDate}.log";

	$log->info('Whatever');
	




?>