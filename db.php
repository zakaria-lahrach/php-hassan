<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type");
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');

	$databaseUsername = 'root';
	$databasePassword = '';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=crud_vuejs', $databaseUsername, $databasePassword );
?>