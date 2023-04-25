<?php
include '../partial/db_connect.php';
// include "../Sessions.php";
    $sql="SELECT `overall_attendance` FROM `attendance` WHERE Rollno='$_SESSION[Rollno]'";
    $result=mysqli_query($connect_db_ls,$sql);
    while($row=$result->fetch_assoc()){
        $_SESSION['attendance']=$row['overall_attendance'];
    }
?>