<?php
session_start();

    function updatecourse(){
        if(isset($_POST["updatec"])){
            include '../partial/db_connect.php';
            $update=$_POST['mycourse'];
            $currentuser=$_SESSION['username'];
            $update="UPDATE `students_lsclasses_data` SET `My Course`='$update' WHERE `username`='$currentuser' ";
            $result=mysqli_query($connect_db_ls,$update);
            if($result){
                // 
                header("location: ../Student_Dashboard.php");
            }
            else{
                echo "Some Error Occured";
            }
        }
    }

    function uploadpic(){
        if(isset($_POST['insertpic'])){
        include '../partial/db_connect.php';

        $img=$_POST['uploadpic'];
        $username=$_SESSION['username'];
        $upload="INSERT INTO `students_lsclasses`(`Profile`)VALUES('$img')";
        $result=mysqli_query($connect_db_ls,$upload);
        if($result){
            echo "executed !";
            
        }
        else{
            echo "stopped !";
            }   
        }
    }

    function Displayprofile(){
        
        include "../partial/db_connect.php";
        $fetch="SELECT * FROM `student_lsclasses_data`";
        $result=mysqli_query($connect_db_ls,$fetch);
        if(!$result){
            echo "Report Developer Its A ERROR !s";
        }
        
        
    }

    function updateName(){
        if(isset($_POST['profileupdate'])){
            include '../partial/db_connect.php';
            include '../Sessions.php';
            $Name=$_POST['Name'];
            $update_password=$_POST['password'];
            $Dob_update=$_POST['DOB_update'];
            $currentuser=$_SESSION['username'];
            $currentuser_Rollno=$_SESSION['Rollno'];
            $School=$_POST['School'];
            $city=$_POST['City'];
            $State=$_POST['State'];



            $sql="UPDATE `students_lsclasses_data` SET `Name`='$Name', `password`='$update_password' , `DOB`='$Dob_update' ,`School`='$School' , `City`='$city' , `State`='$State' WHERE   `Sno`='$currentuser_Rollno'";
            $result=mysqli_query($connect_db_ls,$sql);
            if($result){
                // echo "";
                header("location: ../Student_Dashboard.php");
            }
            else{
                echo "Acknowledge Site developer its a Error!";
            }
        }
    }
    


    updateName();
    updatecourse();
?>