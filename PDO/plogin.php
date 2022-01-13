<?php
    require_once('./../config.php');

    $email = "";
    $password = "";
    if(isset($_POST["email"])){

        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = sha1($_POST['password']);
    
            $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute(['email' => $email, 'password' => $password]);
            $users = $stmtinsert->fetchAll();
            foreach ($users as $user) {
                $_SESSION["email"] = $email;
                $_SESSION["user_id"] = $user["u_id"];
                $_SESSION["user_type"] = $user["usertype"];
            }
            if($result){
                // $_SESSION["email"] = $email;
                // $_SESSION["user_id"] = $user["u_id"];
                // $_SESSION["user_type"] = $user["usertype"];

                // $_SESSION["user_id"] = "101";
                // $_SESSION["user_type"] = "2";

                // echo 'Successfully saved.';
                // header('location: ./../fjobs.php');
                echo 'Successfully login.<br>'; 
               echo 'Please Click <a href="./../fjobs.php">here</a> to see more Jobs';
            }else{
                echo 'There were error while saving the data.';
            }
    }else{
        echo 'No data';
    }
?>