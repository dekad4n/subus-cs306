<?php

include "config.php";

print_r($_POST);
if(!empty($_POST['tickettrid'])){
    $trid = $_POST['tickettrid'];
    $cssn = $_POST['cssn'];
    $buy_date = date("l");

    $doesExist = "SELECT COUNT(*) AS cnt, cid AS cid FROM customers WHERE ssn = " .$cssn;
    $doesExistResult = mysqli_query($db, $doesExist);

    $res = mysqli_fetch_assoc($doesExistResult);


    if($res != null && $res["cnt"] != 0 )
    {
        $cid = $res["cid"];
         $sql_statement = "INSERT INTO tickets(buy_date, cid, tripid) VALUES ('$buy_date', '$cid', $trid)";
         $result = mysqli_query($db, $sql_statement);
         header("Location: index.php");
    }
    else{
        $message = "Enter your customer id correctly.";
        echo "<script type='text/javascript'>alert('$message');window.location = \"index.php\"</script>";

    }
    
}

else{
    echo "The form is empty <br>";
}
?>