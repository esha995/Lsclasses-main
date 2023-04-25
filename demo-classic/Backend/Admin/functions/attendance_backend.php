<?php
error_reporting(0);
    function takeattendance(){

        if(isset($_POST['updateattendance'])){
            include '../../../partial/db_connect.php';
            // $Sno=$_POST['Sno'];
            $Rollno=$_POST['Rollno'];
            $date=$_POST['datetake'];
            $check=$_POST['check'];
            $counter=1;
            $yes=1;
            $fetch1=mysqli_query($connect_db_ls,"select * from attendance ");
            $qurty=mysqli_query($connect_db_ls,"select * from attendance  where Rollno='$Rollno'and date='$date' and Status= 1");
            $count = mysqli_num_rows($qurty);
            $update=0;
            if($count>0){
                
                echo "Attendance Already Taken";
                header("location: ../Attendance.php");
            }
            while($row= $fetch1->fetch_array()){
                if($row['5']==$date){
                    $update=1;
                    echo "Attendance Already Taken !";
                    header("location: ../Attendance.php");
                    exit();

                    // Check if Attendance was taken or not
                }
                else{
                    $yes=2;
                }
               
                
                    // header("location: ../Attendance.php");
                    // Insert the new attendance bar
                    
            }
            
            if($yes==2){
                echo"insert";
                $update=1;
                $fetch2=mysqli_query($connect_db_ls,"select * from attendance where counter='1' ");
                while($row= $fetch2->fetch_array()){
                   
                        $sql=mysqli_query($connect_db_ls,"INSERT INTO `attendance`(`username`, `Rollno`, `Name`, `Course`, `date`) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$date')");
                        header("location: ../Attendance.php");
                    
             
               
               }
           
            
            }
        }
                   if(isset($_POST['save'])){
                    include '../../../partial/db_connect.php';
            // $Sno=$_POST['Sno'];
            $Rollno=$_POST['Rollno'];

            $date=$_POST['datetake'];
            $check=$_POST['check'];
            $counter=1;
            $yes=1;
            $fetch1=mysqli_query($connect_db_ls,"select * from attendance ");
            $qurty=mysqli_query($connect_db_ls,"select * from attendance  where Rollno='$Rollno'and date='$date' and Status= 1");
            $count = mysqli_num_rows($qurty);
            $update=0;
          
                    $Num=count((array)$Rollno);
                    foreach($check as $check1){
                        $Rollno;
                            if(isset($check1)) //the checked checkboxes
                            {
                                    $qquery=mysqli_query($connect_db_ls,"UPDATE `attendance` SET `Status`='1' WHERE `Rollno`='$check1' and `date`='$date'");
                                    header("location: ../Attendance.php");
                                    // if ($qquery) {
                                    //   $absent="UPDATE `attendance` SET `Status`='1' WHERE `Status`='2'";
                                    //   $result=mysqli_query($connect_db_ls,$absent);
                                    //   header("location: ../Attendance.php");
                                    
                                    // }
                                    
                                    
                                
                            }
                    }
                }
                



            




        }


    

    takeattendance();

?>