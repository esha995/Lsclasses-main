<?php 
function create(){


  if(isset($_POST['create'])){
    include "../../../partial/db_connect.php";

    $batch=$_POST['batchname'];
    $faculty=$_POST['facultyname'];

    $sql="INSERT INTO `bound`.`batches`(`Batches_Name`, `faculty_Name`) VALUES ('$batch','$faculty')";
    $result=mysqli_query($connect_db_ls,$sql);
    if($result){
      // echo "Insert";
      
      header("refresh: 2; url = ../Attendance.php");
      
    }
    else{
      echo "error";
    }

  }
}

function show(){
    
}




create();

  ?>