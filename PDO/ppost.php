<?php
    require_once('./../config.php');

    $_SESSION["user_id"] = '3';
    $jobtitle = "";
    $address = "";
    $profession = "";
    $duration = "";
    $contactNo = "";
    $jobdetail = "";
    $budget = "";
    $posted_by = $_SESSION["user_id"];
   
    if (isset($_POST)) {
        
        $jobtitle = $_POST['jobtitle'];
        $address = $_POST['address'];
        $profession = $_POST['profession'];
        $duration = $_POST['jobduration'];
        $contactNo = $_POST['contactNo'];
        $jobdetail = $_POST['jobdetail'];
        $budget = $_POST['budget'];
        
        $sql = "INSERT INTO job (jobtitle, address, profession, jobduration, contactNo, jobdetail, budget, posted_by) VALUE (?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$jobtitle, $address, $profession, $duration, $contactNo, $jobdetail, $budget, $posted_by]);
        if ($result) {
           echo 'Successfully Posted.<br>';
            // header('location: ./../index.html');
               echo 'Please Click <a href="./../fjobs.php">here</a> to post more Jobs';
        }else {
            echo 'There were error while saving the data';
        }
    }else {
        echo 'Email id already Exist.';
    }
?>