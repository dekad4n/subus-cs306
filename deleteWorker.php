<?php

include "config.php";

if(!empty($_POST['wid'])){
    $selection_id = $_POST['wid'];
    $sql_statement = "DELETE FROM workers WHERE wid = $selection_id";
    $result = mysqli_query($db, $sql_statement);

    header("Location: index.php");
}

else {
    echo "Not selected any id!";
}