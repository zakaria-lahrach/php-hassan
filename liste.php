<?php

require_once("db.php");
$pdo_statement = $pdo_conn->prepare("SELECT * FROM todo");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
print_r($result);
?>