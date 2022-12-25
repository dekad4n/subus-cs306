<?php 

include "config.php";

if(!empty($_POST['price'])){
    $price = $_POST['price'];
    $start_date = $_POST['start_date'];
    $arrival_date = $_POST['arrival_date'];
    $isService = $_POST['isService'];
    $bid = $_POST['bid'];
    $starts_lid = $_POST['starts_lid'];
    $ends_lid = $_POST['ends_lid'];

     $sql_statement = "INSERT INTO trips(price, startdate, arrivaldate, isService, bid, startslid, endslid) VALUES ('$price', '$start_date', '$arrival_date', '$isService', $bid, $starts_lid, $ends_lid)";

     $result = mysqli_query($db, $sql_statement);
     header("Location: index.php");
}

else{
    echo "The form is empty <br>";
}
?>