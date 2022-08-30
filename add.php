
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <title>Add New Student</title>
</head>
<body>
    <header>
        <a href="motherbord.html" class="logo">MEGA</a>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">Courses</a>
            <a href="#">Campus</a>
            <a href="#">About</a>
        </nav>
        </header> <!-- End Header-->
        <div class="log">
          <div class="information">
            <!-- Logo -->
          <span>MEGA</span>

          <!-- Form use in collaction Data -->

    <form action="add.php" method="post">
          <!-- header-->
    <h2 class="title">Add Student</h2>

     <!-- label containt tag style to use in background color 
          and change color text and padding left 
          color: rgb(6, 67, 252);
          font-weight: 600;
          padding-left:10px;  -->

            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px"> First Name</label>
            <input type="text" name="first-name" placeholder="Enter First Name" class="inp"><br>
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px"> Last Name</label>
            <input type="text" name="last-name" placeholder="Enter Last Name" class="inp"><br>
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px"> E-mail</label>
            <input type="email" name="email" placeholder="Email"class="inp"><br>
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">Phone</label>
            <input type="number" name="phone" placeholder="+249" class="inp"><br>
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">What Are You Studening</label><br>
            
            <!-- select student Depth conyaint three option 
              1 - It
              2 - Medcine
              3 - Engenering                     
             -->  
            <select name="studing" class="Session">
            <option value="1">It</option>
            <option value="2">Medcine</option>
            <option value="3">Engenering</option>
                </select><br>
             <!-- label-->
             
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">Academic Year</label><br>
          
            <!-- select student Depth conyaint three option 
              1 - first
              2 - Seconed
              3 - Theard
              4 - Forth                     
             -->  
            <select name="year" class="Session">
        <option value="1">First year</option>
        <option value="2">Seconed year</option>
        <option value="3">Theard year</option>
        <option value="4">Forth year</option>
            </select>
        <!-- label-->
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">Gender</label><br>
         
            <!-- select student Gender conyaint Two option 
              1 - Male
              2 - Female                     
        -->  
            <select name="gender"  class="Session">
         <option value="1">Male</option>
         <option value="2">Female</option>
        </select>
        <!-- Button Submit Use in Send Data to lacalhost-->
            <input type="submit" value="Add Student" name="add" class="but_addstd"><br><br>
    </form>
    </div>
</div>
<?php
include('connection.php');
// collaction Form form by super glopal varible 
if($_POST["add"]==true){
    $f_name=$_POST["first-name"];
    $l_name=$_POST["last-name"];
    $email=$_POST["email"];
    $year= $_POST["year"];
    $section =$_POST["studing"];
    $phone =$_POST["phone"];
    $gender=$_POST["gender"];

    // sql query use insert data in database

    $sql="insert into std (f_name,l_name,email,phone,gender,section,year) values('$f_name','$l_name','$email','$phone','$gender','$section','$year')";
    // checked query and excuted query 

    if($conn->query($sql)==true){

        // echo by alert window 
        
        echo "<script>alert('Seccsesfull Data In Table')</script>";
    }else{

        echo" Not Done";
    }
}
?>



