<?php
    include "../partial/db_connect.php";
    $fetch="SELECT * FROM `student_lsclasses_data` WHERE 1";
    $result=mysqli_query($connect_db_ls,$fetch);
    if(!$result){
        echo "Report Developer Its A ERROR !s";
    }
    

?>