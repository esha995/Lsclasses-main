<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
       
    <style>
						.login-box {
								position: absolute;
								margin-top: 10px;
								top: 50%;
			    				left: 50%;
								width: 400px;
								padding: 40px;
								transform: translate(-50%, -50%);
								background: rgba(24, 20, 20, 0.987);
								box-sizing: border-box;
								box-shadow: 0 15px 25px rgba(0,0,0,.6);
								border-radius: 10px;
								}

								.login-box .user-box {
								position: relative;
								}

								.login-box .user-box input {
								width: 100%;
								padding: 10px 0;
								font-size: 16px;
								color: #fff;
								margin-bottom: 30px;
								border: none;
								border-bottom: 1px solid #fff;
								outline: none;
								background: transparent;
								}

								.login-box .user-box label {
								position: absolute;
								top: 0;
								left: 0;
								padding: 10px 0;
								font-size: 16px;
								color: #fff;
								pointer-events: none;
								transition: .5s;
								}

								.login-box .user-box input:focus ~ label,
								.login-box .user-box input:valid ~ label {
								top: -20px;
								left: 0;
								color: #bdb8b8;
								font-size: 12px;
								}

								.login-box form button {
								position: relative;
								display: inline-block;
								padding: 10px 20px;
								color: White;
                                background-color: black;
								font-size: 16px;
								text-decoration: none;
								text-transform: uppercase;
								overflow: hidden;
								transition: .5s;
								margin-top: 40px;
								letter-spacing: 4px
								}
                                


								.login-box button:hover {
								background: #03f40f;
								color: #fff;
								border-radius: 5px;
								box-shadow: 0 0 5px #03f40f,
											0 0 25px #03f40f,
											0 0 50px #03f40f,
											0 0 100px #03f40f;
								}
                                /* .login-box a:hover {
								background: #03f40f;
								color: #fff;
								border-radius: 5px;
								box-shadow: 0 0 5px #03f40f,
											0 0 25px #03f40f,
											0 0 50px #03f40f,
											0 0 100px #03f40f;
								} */

								.login-box button span {
								position: absolute;
								display: block;
								}
                                /* .login-box a span {
								position: absolute;
								display: block;
								} */

								@keyframes btn-anim1 {
								0% {
									left: -100%;
								}

								50%,100% {
									left: 100%;
								}
								}

								.login-box button span:nth-child(1) {
								bottom: 2px;
								left: -100%;
								width: 100%;
								height: 2px;
								background: linear-gradient(90deg, transparent, #03f40f);
								animation: btn-anim1 2s linear infinite;
								}
                                /* .login-box a span:nth-child(1) {
								bottom: 2px;
								left: -100%;
								width: 100%;
								height: 2px;
								background: linear-gradient(90deg, transparent, #03f40f);
								animation: btn-anim1 2s linear infinite;
								} */

								h3{
									color: white;
									text-align: center;
								}
								#st-lg{
									display: block;
									margin-left: auto;
									margin-right: auto;
									width: 30%;
								}
								
					</style>
<!-- Style for the black login -->
<!-- backend for login -->
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	include "partial/db_connect.php";
	
	$username=$_POST['user_login'];
	$password=$_POST['user_password'];
	
	$fetch = "Select * from `students_lsclasses_data` where `username`='$username' AND `password`='$password'";
	$result = mysqli_query($connect_db_ls, $fetch);
	$num=mysqli_num_rows($result);
	if ($num>0)
	{
		
		$login=true;
		session_start();
		$_SESSION['student_loggedin'] = true;
		$_SESSION['username'] = $username;
		
		

		header("location: Student_Dashboard.php");
	}
	else
	{
		echo "Invalid Credentials";
		$showError = "Invalid Credentials";
		// header("location: Student_portal_login.php");
	}

	
	// variables used



	
}


?>
<!-- HTML for the black Login -->
							
					<div class="login-box">
                    <div style="color:white; text-align:center; font-weight:none;"> <a href="index.html" style="color:white; font-weight:none;">Home ></a> Student Portal Login</div>
					<br>	
                    <form action="Student_portal_login.php" method="post">
                            
							<img id="st-lg" src="../wp-content/uploads/2022/06/lswhite.png" alt="">
							<h3>S t u d e n t &nbsp; P o r t a l &nbsp; <br> L o g i n</h3>
							
							<br>
						<div class="user-box">
							<input type="text" name="user_login" required="">
							<label>Username</label>
						</div>
						<div class="user-box">
							<input type="password" name="user_password" required="">
							<label>Password</label>
						</div><center>
                        <button type="submit">LOG IN </button>
                            <a href="#">
                            
                                <span></span>
                            </a>
						</center>
						</form>
					</div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
    </section>
</body>
</html>