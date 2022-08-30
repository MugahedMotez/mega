<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
    <title>Information Of Student</title>
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
        </header>
        <h2 class="title">Table Sudent</h2>
<?php

$conn=new mysqli("localhost","root","","mega");
if($conn->connect_error){

    die("connection field".$conn->connect_error);

}
// Select Data From Table
$select = "select * from std ";
$selectexe = mysqli_query($conn,$select);
?>
<table align="center" border="1" 
style=" background-color: rgb(6, 67, 252);
 color:#fff ; 
 width:80% ;
 align-items: center; 
 margin:110px;
 border-ridues:;
 ">
    <tr>
        <th> Id </th>
        <th> First_name </th>
        <th> Last_name </th>
        <th> E-mail </th>
        <th> Phone</th>
        <th> Gender</th>
        <th> Section</th>
        <th> Year</th>
    </tr>
<?php
while($data = mysqli_fetch_assoc($selectexe)) {
    // var_dump($data);
    ?>
        <tr>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;" > <?php echo $data['id']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['f_name']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['l_name']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['email']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['phone']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['gender']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['section']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $data['year']; ?> </td>
            
        </tr>
    <?php
}//END while($data = mysqli_feach_acc($selectexe))

?>
</table>
<footer>
           <p>&copy; All Resevied <span>MEGA</span> 2022</p> 
           <h3>Powerd by Mugahed</h3>
        </footer>
</body>
</html>