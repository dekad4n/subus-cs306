<?php

include "config.php";


if(!empty($_POST['wid'])){
    $trid = $_POST['trid'];
    $wid = $_POST['wid'];

    $sql_statement = "INSERT INTO worksin(wid, trid) VALUES ('$wid', '$trid')";
    $result = mysqli_query($db, $sql_statement);
    header("Location: index.php");
}

else{
    echo "The form is empty <br>";
}
?>