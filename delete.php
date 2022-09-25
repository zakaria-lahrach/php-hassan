<?php
require_once("db.php");
$pdo_statement=$pdo_conn->prepare("delete from todo where id=" . $_GET['id']);
$pdo_statement->execute();