<?php
    require_once('./../config.php');

    $firstname = "";
    $lastname = "";
    $dateofbirth = "";
    $gender = "";
    $email = "";
    $phoneno = "";
    $jobtype = "";
    $password = "";
   
    if (isset($_POST)) {
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $dateofbirth = $_POST["birthdayDate"];
        $gender = $_POST["gender"];
        $email = $_POST["emailAddress"];
        $phoneno = $_POST["phoneNumber"];
        $jobtype = $_POST["usertype"];
        $password = $_POST["password"];

        $password 		= sha1($_POST['password']);
        
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmtcheck = $db->prepare($sql);
        $result = $stmtcheck->execute(['email' => $email]);
        
        if($stmtcheck->rowCount() == 0){
            $sql = "INSERT INTO user (firstname, lastname, dob, gender, email, phonenumber, usertype, password) VALUE (?,?,?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $dateofbirth, $gender, $email, $phoneno, $jobtype, $password]);
            if ($result) {
               echo 'Successfully registered.';
               header('location: ./../flogin.html');
            }else {
                echo 'There were error while saving the data';
            }
        }else {
            echo 'Email id already Exist.';
        }
    }
?>