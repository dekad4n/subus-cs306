<?php

include "config.php";

if(!empty($_POST['worker_name'])){
    $worker_name = $_POST['worker_name'];
    $worker_surname = $_POST['worker_surname'];
    $worker_ssn = $_POST['worker_ssn'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $worker_role = $_POST['worker_role'];

    $sql_statement = "INSERT INTO workers(worker_name, worker_surname, worker_ssn, gender, age, salary, worker_role) VALUES ('$worker_name', '$worker_surname', '$worker_ssn', '$gender', $age, $salary, '$worker_role')";
    $result = mysqli_query($db, $sql_statement);
    header("Location: index.php");
}

else{
    echo "The form is empty <br>";
}
?>