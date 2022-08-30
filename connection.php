<?php
    // checked if user cliecked button 

   
    // conction database
$conn=new mysqli("localhost","root","","mega");

   // checked connection

if($conn->connect_error){

    die("connection field".$conn->connect_error);

}