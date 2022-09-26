<?php

require_once("db.php");
try {
    $sql = "INSERT INTO todo ( title, description ) VALUES ( :post_title, :description )";
    $pdo_statement = $pdo_conn->prepare( $sql );
    $result = $pdo_statement->execute( array( ':title'=>$_POST['title'], ':description'=>$_POST['description'] ) );
} catch( PDOException $Exception ) {
    return "error";
   // throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
}
return "success";
