<?php 

include "config.php";

if(!empty($_POST['cid'])){
    $selection_id = $_POST['cid'];
    $sql_statement = "DELETE FROM customers WHERE cid = $selection_id";
    $result = mysqli_query($db, $sql_statement);

    header("Location: index.php");
}

else {
    echo "Not selected any id!";
}