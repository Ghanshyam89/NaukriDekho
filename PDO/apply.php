<?php
    require_once('./../config.php');

    $u_id = "";
    $job_id = "";
    $firstname = "";
    $lastname = "";
    $email = "";
    $owndetail = "";
    $phoneno = "";
    
    if (isset($_POST)) {
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $email = $_POST["emailAddress"];
        $owndetail = $_POST["owndetail"];
        $phoneno = $_POST["phoneno"];
        $job_id = $_POST["job_id"];

            $sql = "INSERT INTO jobapplication (job_id, firstname, lastname, email, owndetail, phoneNo) VALUE (?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$job_id, $firstname, $lastname, $email, $owndetail, $phoneno]);
            if ($result) {
               echo 'Successfully Applied for the job.<br>'; 
               echo 'Please Click <a href="./../fjobs.php">here</a> to see more Jobs';
                //    header('location: ./../fjobs.php');
            }else {
               echo 'There were error while saving the data';
            }
    }
    else{
        echo "Please login!";
    }
?>