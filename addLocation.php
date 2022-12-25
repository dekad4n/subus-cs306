<?php 

include "config.php";

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $city = $_POST['city'];

     $sql_statement = "INSERT INTO locations(name, city) VALUES ('$name', '$city')";

     $result = mysqli_query($db, $sql_statement);
     header("Location: index.php");
}

else{
    echo "The form is empty <br>";
}
?>