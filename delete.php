<?php
require_once("db.php");

$data  = json_decode(file_get_contents('php://input'),true);
$id = $data["id"];
$pdo_statement=$pdo_conn->prepare("delete from todo where id=" . $id);
$pdo_statement->execute();