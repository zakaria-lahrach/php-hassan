<?php

require_once("db.php");
$pdo_statement = $pdo_conn->prepare("SELECT * FROM todo");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
$data = [];
foreach ( $result as $row ) {
    $data[]= ["id"=>$row['id'],"title"=>$row['title'],"description"=>$row['description']];
}
echo json_encode($data);
?>
