// ... 

// LOGIN USER
<?php

$db = mysqli_connect( "localhost","naukridekho", "root", ""); // to connect with database

$email = ""; 
$password = "";

if (isset($_POST['login_user'])) {
  	$email = mysqli_real_escape_string($db, $_POST['email']); //email is ID, Post wil take value and convert it to string then store it in emaoil var.
  	$password = mysqli_real_escape_string($db, $_POST['password']); // " same here

  	$password = md5($password);//md5 for encryption the password
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$password'"; // For check the availability of email and password in database beforehand
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  	$_SESSION['email'] = $email;
  	  	$_SESSION['success'] = "You are now logged in";
  	  	header('location: fjobs.html'); // for redirecting to index page after successfull login
  	}else {
  		echo '<script> alert("Invalid Email or Password, Please enter correct details.")</script>';
		header('location: flogin.html'); // for redirecting to index page after successfull login
  	}
}
?>