<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <title>Delete</title>
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

          <!-- Form -->

    <form action="delete.php" method="post">
    <h2 class="title">Delete Student</h2>
            <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px">Email</label><br>
            <input type="email" name="email" placeholder="Enter Email" class="inp"><br>
            <input type="submit" value="Delete" name="delete" class="but_addstd"><br><br>
    </form>
</div>
</div>
<footer>
           <p>&copy; All Resevied <span>MEGA</span> 2022</p> 
           <h3>Powerd by Mugahed</h3>
        </footer>
    <?php
    
if($_POST["delete"]==true){
$conn=new mysqli("localhost","root","","mega");
if($conn->connect_error){

    die("connection field".$conn->connect_error);

}
    $email=$_POST["email"];
    
   
    $sql="DELETE  FROM std where email= '$email'";
    if($conn->query($sql)==true){
        echo "<script>alert('Delete Seccsessfull')</script>";
    }else{

        echo "<script>alert('!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!')</script>";
    }
}
?>
</body>
</html>

