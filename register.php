<?php

include 'config.php';

$firstname = "";
$lastname = "";
$dateofbirth = "";
$gender = "";
$email = "";
$phoneno = "";
$jobtype = "";
$password = "";

    echo '<script>PHP Registeration initiated</script>';
    $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
    $dateofbirth = mysqli_real_escape_string($db,$_POST['dateofbirth']);
    $gender = mysqli_real_escape_string($db,$_POST['gender']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $phoneno = mysqli_real_escape_string($db,$_POST['phoneno']);
    $jobtype = mysqli_real_escape_string($db,$_POST['jobtype']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $select_query = "SELECT * From user WHERE email = '$email'";
    $resultS = mysqli_query($db, $query);
    if($resultS == 0){              // attributes name \/
        $query = "INSERT into user (firstname, lastname, dateofbirth, gender, email, phoneno, jobtype, password) 
        VALUES('$firstname', '$lastname', '$dateofbirth', '$gender', '$email', '$phoneno', '$jobtype', '$password')";
        $resultS = mysqli_query($db, $query);
        echo '<script>PHP Registered Succesfully</script>';
        header('location: flogin.html');   // redirect to login page after register
    }
    else{
        echo 'This e-mail id is already registered!';
    }
?>