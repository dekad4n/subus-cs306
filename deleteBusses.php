<?php

include "config.php";

if(!empty($_POST['bid'])){
    $selection_id = $_POST['bid'];
    $sql_statement = "DELETE FROM busses WHERE bid = $selection_id";
    $result = mysqli_query($db, $sql_statement);

    header("Location: index.php");
}

else {
    echo "Not selected any id!";
}

