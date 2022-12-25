<?php 

include "config.php";

if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $ssn = $_POST['ssn'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];

    $sql_statement = "INSERT INTO customers(cname, csurname, ssn, gender, age, telephone, mail) VALUES ('$name', '$surname', '$ssn', '$gender', $age, '$telephone', '$mail')";
    $result = mysqli_query($db, $sql_statement);
    header("Location: customers.php");
}

else{
    echo "The form is empty <br>";
}
?>