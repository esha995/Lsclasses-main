<?php
    $Database_user = include 'partial/db_connect.php';

    function register($Data){
        // include_once 'partial/fb_connect.php';
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $password=$_POST['password'];
        $cpassword=$_POST['Confirmpass'];
        $user="INSERT INTO `user`( `Name`, `Email`, `Password`, `ConfirmPass`) VALUES ('$Name','$Email','$password','$cpassword')";
        $result=mysqli_query($connect_db_ls,$user);
        if($result){
            echo "Connection Established";
        }
        // Working with Bug
    }
    function login(){
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $password=$_POST['password'];
        $user="SELECT * FROM `user` WHERE `Name`='$Name',`Email`='$Email',`password`=";

    }

    register($Database_user);
    

?>