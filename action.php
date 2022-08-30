
<?php

$conn=new mysqli("localhost","root","","mega");
if($conn->connect_error){

    die("connection field".$conn->connect_error);

}

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
        <th> Student_name </th>
        <th> E-mail </th>
        <th>  Java</th>
        <th> Php</th>
        <th> Network</th>
        <th> Avrage</th>
    </tr>
<?php
// Select Data From Table
$id =$_POST['id'];
$select = "SELECT * from result where id ='$id'" ;
$selectexe = mysqli_query($conn,$select);
while($result = mysqli_fetch_assoc($selectexe)) {
    // var_dump($data);
    ?>
        <tr>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;" > <?php echo $result['id']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['student_name']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['email']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['php']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['java']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['network']; ?> </td>
            <td style=" background-color: #fff; color: rgb(6, 67, 252); font-size:20px ;font-weight: 600;"> <?php echo $result['avrage']; ?> </td>
            
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