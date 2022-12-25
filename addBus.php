<?php

include "config.php";

if(!empty($_POST['plate'])){
    $plate = $_POST['plate'];
    $brand = $_POST['brand'];
    $bus_year = $_POST['bus_year'];
    $capacity = $_POST['capacity'];
    $is_wifi = $_POST['is_wifi'];
    $is_socket = $_POST['is_socket'];

    $sql_statement = "INSERT INTO busses(plate, brand, bus_year, capacity, is_wifi, is_socket) VALUES ('$plate', '$brand', $bus_year, $capacity, '$is_wifi', '$is_socket')";
    $result = mysqli_query($db, $sql_statement);
    header("Location: index.php");
}

else{
    echo "The form is empty <br>";
}
?>