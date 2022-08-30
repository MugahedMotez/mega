<?php
 include('connection.php');
 
?>
<html>
<body>
    <head>

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
    <script src="pdf.js"></script><!--Source javascript file download-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Result</title>
    </head>
<header>
<a href="motherbord.html" class="logo">MEGA</a>
        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">Courses</a>
            <a href="#">Campus</a>
            <a href="#">About</a>
        </nav>
        </header>
      
        <div class="log">
          <div class="information";>
          <span>MEGA</span>
    <form action="result.php" method="POST">
    <h2 class="title">Result Student</h2>
    <label style="color: rgb(6, 67, 252);font-weight: 600; padding-left:10px" >Id</label><br>
            <input type="number" name="id" placeholder="Enter Td" class="inp"><br>
            <input type="submit" value="Result" name="send" class="but_addstd"><br><br>
  

</form>
</div>
</div>
<!----- styling With Css in line tag Button

style="background-color: rgb(6, 67, 252);
color: #fff;
width: 90%;
border: none;
margin: 10px;
width: 90%;
font-size: 20px;
box-sizing: border-box;
padding: 5px 10px;
margin-left:50px;
border-radius: 5px;";
------>

<button id="download" 
style="background-color: rgb(6, 67, 252);
color: #fff;
width: 90%;
border: none;
margin: 10px;
width: 90%;
font-size: 20px;
box-sizing: border-box;
padding: 5px 10px;
margin-left:50px;
border-radius: 5px;";>Download Result</button>

<!----- styling With Css in line tag table

style=" background-color: rgb(6, 67, 252);
 color:#fff ; 
 width:80% ;
 align-items: center; 
 margin:110px;
 border-ridues:;
 ------>
 <?php
// Select Data From Table
$id =$_POST['id'];
$select = "SELECT * from result where id ='$id'" ;
$selectexe = mysqli_query($conn,$select);
while($result = mysqli_fetch_assoc($selectexe)) {
    // var_dump($data);
    ?>
     
    <!--
     If Condetion 
     if avrage >= 3.50 ) -- > Exlant
     if avrage >= 3.00 ) -- > Very Good
     if avrage >= 2.50 ) -- > Good
     if avrage < 2.50 ) -- > Fail
     -->
     </h2>
     <div  id="invoice">
        <h1 style=" text-align: center;
                    padding-top: 120px;";>بسم الله الرحمن الرحيم</h1>
        <h1 style="text-align: center;
                    color:black;";>جامعة العلوم و التقانة</h1>
        <h3 style="text-align: center;
                    padding: 10px;
                    color:black;";>كليه علوم الحاسوب</h3>
       <h3 style="text-align: center;
                    padding: 10px;
                    color:black;"> العام الدراسي 2022/2023</h3>

 <h2 class="title">
    <?php if(($result['avrage'])>="4.00") { 
        echo "Exelant";
    }
    elseif (($result['avrage'])>="3.50"){
        echo " Very Good";
    }
    elseif (($result['avrage'])>="3.00"){
        echo "Good";
    }
    elseif (($result['avrage'])<"2.50"){
        echo "Fail";
    }; 
    
    ?>
                    
                    
<table align="center" border="1"  
style=" background-color: rgb(6, 67, 252);
 color:#fff ; 
 width:100% ;
 align-items: center; 
margin-top:50px;
margin-bottom: 150px;
 justify-content: center;


 ">
    <tr>
        <th> ID </th>
        <th> Student_name </th>
        <th> E-mail </th>
        <th>  Java</th>
        <th> Php</th>
        <th> Network</th>
        <th> Avrage</th>
    </tr>

        <tr>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;" > <?php echo $result['id']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['student_name']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['email']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['php']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['java']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['network']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['avrage']; ?> </td>
            
        </tr>
        </div>
    <?php
}//END while($data = mysqli_feach_acc($selectexe))

?>

</table>
<footer>
           <p style="color:#000">&copy; All Resevied <span  style="color: rgb(6, 67, 252);
            font-size: 30px">MEGA</span> 2022</p> 
           <h7 style="color:#000;font-size:20px ">Powerd by Mugahed</h7>
 </footer>
       
</body>
</html>
