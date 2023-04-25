<?php
 if(isset($_POST["signup"])){error_reporting(E_ALL);
    include "../partial/db_connect.php";
    echo "hy";
    $username= $_POST["username"];
    $password= $_POST["password"];
    $confirmpassword= $_POST["confirm_password"];
    $DOB= $_POST["DOB"];
    $phoneno= $_POST["Phoneno"];
    $class= $_POST["class"];
    $school= $_POST["School"];
    $city= $_POST["City"];
    $state= $_POST["State"];
   
    $existsSql="Select * From `students_lsclasses_data` Where username ='$username'";
$result=mysqli_query($connect_db_ls,$existsSql);
$numExistsrow=mysqli_num_rows($result);
if($numExistsrow>0)
{
echo"<script>alert('Username Exists !');</script>";
header("location: ../Student_portal_signup");
}
else{
    if($password==$confirmpassword){
        $insert_stud="INSERT INTO `bound`.`students_lsclasses_data`(`username`, `password`, `DOB`, `Phone`, `class`, `School`, `City`, `State`) VALUES ('$username','$password','$DOB','$phoneno','$class','$school','$city','$state')";
        if($connect_db_ls->query($insert_stud)==true){
                   // echo "Inerted";
                   echo"<script>alert('You are Registered !');</script>";
                   header("location: ../index.html");
               }
    }
}
}

?>