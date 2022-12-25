<?php

include "config.php";

if(!empty($_POST['seeTicket'])){
    $cid = $_POST['cid'];
    $sql_statement = "SELECT * FROM tickets WHERE cid = ".$cid ;

    $result = mysqli_query($db, $sql_statement);
    
    
}
else{
    $sql_statement = "SELECT * FROM tickets WHERE cid = -1" ;
    $result = mysqli_query($db, $sql_statement);
}
?>