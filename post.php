<?php

$db = mysqli_connect("localhost","naukaridekho","root","");

$job_id = "";
$jobtitle = "";
$address = "";
$profession = "";
$duration = "";
$contactNo = "";
$jobdetail = "";
$budget = "";
    
    // $job_id = mysqli_real_escape_string($db,$_POST['']);
    $jobdetail = mysqli_real_escape_string($db,$_POST['jobtitle']);
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $profession = mysqli_real_escape_string($db,$_POST['profession']);
    $duration = mysqli_real_escape_string($db,$_POST['duration']);
    $contactNo = mysqli_real_escape_string($db,$_POST['contactNo']);
    $jobdetail = mysqli_real_escape_string($db,$_POST['jobdetail']);
    $budget = mysqli_real_escape_string($db,$_POST['budget']);

    $query = "INSERT into user (jobdetail, address, profession, duration, contactNo, jobdetail, budget)
    VALUES( '$jobdetails', '$address', '$profession', '$duration', '$contactNo', '$jobdetail', '$budget')";
    $resultS = mysqli_query($db, $query);
    echo '<script>alert("Your job has been succcessfully Posted.")</script>';
    header('location: index.html');
?>