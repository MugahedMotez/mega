<?php
 $username = "";
 $email = "";
 $erorrs = array();

// Connect The databace
$db = mysqli_connect('localhost','root','','mega');
     // if button clicked
if(isset($_POST['send'])){
	$username =mysql_real_escape_string($_POST['user_name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password =mysql_real_escape_string($_POST['password_1']);
	$password_2= mysql_real_escape_string($_POST['password_2']);

    // filed

    if(empty($username)){
    	array_push($erorrs, "username is Requerd");
    }

    if(empty($email)){
    	array_push($erorrs, "Email is Requerd");
    }


if(empty($password_1)){
    	array_push($erorrs, "password is Requerd");
    }


if($password_1 != $password_2){
    	array_push($erorrs, "two password is Requerd");
    }

if(count($erorrs) == 0){
	$password = md5($password_1);
	$sql="INSERT INTO table_user (user_name , email, password) VALUES ('$username','$email','$password')";
      mysqli_query($db ,$sql);
       // $_session['username'] = $username;
        header('location : home.html');
  }

}
 
?>