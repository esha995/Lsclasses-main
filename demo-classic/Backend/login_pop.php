<?php

        function signup(){
            if(isset($_POST["user_register"])){
                        include "../partial/db_connect.php";    
                        $user_name=  $_POST["user_name"];
                        $user_email=   $_POST["user_email"];
                        $user_pos=  $_POST["Position"];
                        $user_pass=     $_POST["user_password"];
                        $user_cpass=    $_POST["user_cpassword"];
                    

                        if($user_pass==$user_cpass)
                            {
                                $register= "INSERT INTO `bound`.`user`(`user_name`, `user_email`,`user_type`, `user_password`) VALUES ('$user_name','$user_email','$user_pos','$user_pass')";
                                
                                if($connect_db_ls->query($register)==true){
                                    // $show=true;
                                    // echo "success!";
                                    // header("referesh:0,url=register.php");
                                    header("location: ../index.html");
                                }
                                else{
                                    // echo "failed";
                                    // Not executable
                                }
                            }
                        
                }
        }
        // Function Signup Ends

        // Function For Login Starts
        function login(){
            if(isset($_POST["user_login_req"])){
                    include '../partial/db_connect.php';
                    

            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
              
                $username = $_POST["username"];     
                $password = $_POST["pwd"];
                
              
            
                    $sql = "Select * from `user` where user_name='$username' AND user_password='$password'";
                    $result = mysqli_query($connect_db_ls, $sql);
                    $num=mysqli_num_rows($result);
                    if ($num==1)
                    {
                        // $login=true;
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                        header("location: ../Dashboard.php");
                    }
                    else
                    {
                        // echo "Invalid Credentials";\
                        // Non-executable Area Use script to show errors while signing in 
                    }
                

            }
                   
        }
}


function studentsignup(){
 
        if(isset($_POST["signup"])){
            include "../partial/db_connect.php";
        
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
                $insert_stud="INSERT INTO `students_lsclasses_data`(`username`, `password`, `DOB`, `Phone`, `class`, `School`, `City`, `State`) VALUES ('$username','$password','$DOB','$phoneno','$class','$school','$city','$state')";
                if($connect_db_ls->query($insert_stud)==true){
                           // echo "Inerted";
                           echo"<script>alert('You are Registered !');</script>";
                           header("location: ../index.html");
                       }
            }
        }
    }
    }




// Main Calling Area ---------------------------------------------
        // signup();
        login();
        studentsignup();
        
?>