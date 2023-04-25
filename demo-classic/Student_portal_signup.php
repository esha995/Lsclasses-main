
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal || Registration</title>
    
</head>
<body style="background-color: black;">
    <section>
       
    <style>
						.login-box {
								position: absolute;
								margin-top: 110px;
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
<!-- HTML for the black Login -->
							
                            
					<div class="login-box" >
                    <div style="color:white; text-align:center; font-weight:none;"> <a href="index.html" style="color:white; font-weight:none;">Home ></a> Student Portal Register</div>
					<br>
                    
                    <form action="Backend/Signup.php" method="post">
                            
							<img id="st-lg" src="../wp-content/uploads/2022/06/lswhite.png" alt="">
							<h3>S t u d e n t &nbsp; P o r t a l &nbsp; <br> R e g i s t e r </h3>
							
							<br>
						<div class="user-box">
							<input type="text" name="username" required="">
							<label>Username With Roll No</label>
						</div>
						<div class="user-box">
							<input type="password" name="password" required="">
							<label>Password</label>
						</div>
                        <div class="user-box">
							<input type="password" name="confirm_password" required="">
							<label>Confirm password</label>
						</div>
                        <div class="user-box">
							<input type="Date" name="DOB" required="">
							<label></label>
						</div>
                        <div class="user-box">
							<input type="number" name="Phoneno" required="">
							<label>Phone Number</label>
						</div>
                        <div class="user-box">
							<input type="number" name="class" required="">
							<label>Your Class</label>
						</div>
                        <div class="user-box">
							<input type="text" name="School" required="">
							<label>Preparing For Which School / Class 1 - 11?</label>
						</div>
                        <div class="user-box">
							<input type="text" name="City" required="">
							<label>City</label>
						</div>
                        <div class="user-box">
							<input type="text" name="State" required="">
							<label>State</label>
						</div>
                        
                        <center>
                        <!-- <input type="submit" value="signup" name="signup"> -->
						<button type="submit" name="signup" >Signup</button>
                            <a href="#">
                            
                                <span></span>
                            </a>
						</center>
                        
						</form>
					</div>
                   
</body>
</html>