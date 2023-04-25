<?php
    include "../../../partial/db_connect.php";
    //  $Sno=count((array)$Snor);
    //  $countcheck=count((array)$check);
    $status = "";
 
    $Rollno=$_POST['Rollno'];
 
     
    $querey=mysqli_query($connect_db_ls,"select * from attendance where 1");
    $rwws=mysqli_fetch_array($querey);
    $today=date('y-m-d');
    if($rwws['5']==$today){
    
   
 
         $qurty=mysqli_query($connect_db_ls,"select * from attendance  where Rollno='$Rollno' and date='$dateTaken'");
         $count = mysqli_num_rows($qurty);
     
         if($count == 0){ //if Record does not exsit, insert the new record
           $counter=1;
           //insert the students record into the attendance table on page load
           $qus=mysqli_query($connect_db_ls,"select * from attendance  where counter='$counter'");
           if($qus){
             $counter=$counter+1;
             $nextDay = date('Y-m-d');
     
           while ($ros = $qus->fetch_assoc())
             {
                 $qquery=mysqli_query($connect_db_ls,"insert into attendance(`username`,`Rollno`,`Name`,`Course`,`date`,`counter`) 
                 values('$ros[username]','$ros[Rollno]','$ros[Name]','$ros[Course]','$nextDay','$counter')");
                 if($qquery){
                   header("location: Attendance.php");
                 }
             }
               
           }
       }
      }

 
 
   if(isset($_POST['save'])){
   
     $Rollno=$_POST['Rollno'];
     //  $Snor=$_POST['Sno'];
      $check=$_POST['check'];
      $dateTaken=date('y-m-d');
      $N = count((array)$Rollno);
   //check if the attendance has not been taken i.e if no record has a status of 1
    $qurty=mysqli_query($connect_db_ls,"select * from attendance  where Rollno='$Rollno'and date='$dateTaken' and Status= 1");
    $count = mysqli_num_rows($qurty);
    
    if($count > 0)
     {
         //  echo "Attendance has been taken";
         header("location: Attendance.php");
     
     }
     else{
 
       for($N as $check)
       {
               $Rollno[$i]; //admission Number
            echo "hi";
         
               if(isset($check[$i])) //the checked checkboxes
               {
                     $qquery=mysqli_query($connect_db_ls,"UPDATE `attendance` SET `Status`='1' WHERE `Rollno`='$insert[$i]'");
 
                     // if ($qquery) {
                     //   $absent="UPDATE `attendance` SET `Status`='0' WHERE `Status`='2'";
                     //   $result=mysqli_query($connect_db_ls,$absent);
                     //   header("location: ../Attendance.php");
                       
                     // }
                     
                
               }
               
         }
         // header("location: ../Attendance.php");
     }
       }
?>