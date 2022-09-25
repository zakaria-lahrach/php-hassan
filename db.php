<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

	$databaseUsername = 'root';
	$databasePassword = '';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=crud_vuejs', $databaseUsername, $databasePassword );
?>