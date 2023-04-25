<?php
    include 'partial/db_connect.php';

    $sql="SELECT * FROM `attendance` where username='$_SESSION[username]' ";
    $RESULT=mysqli_query($connect_db_ls,$sql);
    while($row = $RESULT->fetch_assoc()){
        $_SESSION['Rollno']=$row['Rollno'];
        $_SESSION['Status']=$row['Status'];
    }

?>