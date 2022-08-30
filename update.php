<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <title>Update</title>
</head>
<body>
    <header>
        <a href="motherbord.html" class="logo">MEGA</a>
        <nav class="nav">
            <a href="#main">Home</a>
            <a href="#service">Courses</a>
            <a href="info.html">Campus</a>
            <a href="#">About</a>
        </nav>
        </header>
        <div class="log">
          <div class="information">
          <span>MEGA</span>
    <form action="update.php" method="post">
    <h2 class="title">Update Student</h2>
            
    <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">Email</label><br>
            <input type="email" name="email"class="inp"><br>

            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">New First Name</label><br>
            <input type="text" name="first-name"class="inp"><br>
             
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">New Last Name</label><br>
            <input type="text" name="last-name" class="inp"><br>
            
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">New Phone</label>
            <input type="number" name="phone" placeholder="+249" class="inp"><br>

            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">New Section</label><br>
                <select name="studing" class="Session">
            <option value="1">It</option>
            <option value="2">Medcine</option>
            <option value="3">Engenering</option>
                </select><br>
                <select name="year" class="Session">
        <option value="1">First year</option>
        <option value="2">Seconed year</option>
        <option value="3">Theard year</option>
        <option value="4">Forth year</option>
            </select>


            <input type="submit" value="Update" name="update" class="but_addstd"><br><br>
    </form>
    </div>
</div>
<footer>
           <p>&copy; All Resevied <span>MEGA</span> 2022</p> 
           <h3>Powerd by Mugahed</h3>
        </footer>
    <?php
    
if($_POST["update"]==true){
include("connection.php");

}
$f_name=$_POST["first-name"];
$l_name=$_POST["last-name"];
$email=$_POST["email"];
$year= $_POST["year"];
$section =$_POST["studing"];
$phone =$_POST["phone"];
    
    $sql="UPDATE `mega`.`std` SET `f_name` = '$f_name',
    `l_name` = '$l_name',
    `phone` = '$phone',
    `section` = '$section',
    `year` = '2' WHERE `std`.`email` ='$email' ;";
    if($conn->query($sql)==true){
        echo "<script>alert('Update Seccsessfull')</script>";
    }else{

        echo "<script>alert('!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!')</script>";
    }

?>

</body>
</html>

