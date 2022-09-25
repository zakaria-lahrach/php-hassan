<?php

require_once("db.php");
try {
    $pdo_statement=$pdo_conn->prepare("update todo set ptitle='" . $_POST[ 'title' ] . "', description='" . $_POST[ 'description' ]. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
} catch( PDOException $Exception ) {
    return "error";
   // throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
}
return "success";