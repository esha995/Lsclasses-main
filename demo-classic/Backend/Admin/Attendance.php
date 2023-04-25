<?php
session_start();
         if(!isset($_SESSION['student_loggedin'])||$_SESSION['student_loggedin']!=true)
         {
             header("location: Student_portal_login.php");
             exit;
         }  
        //  include "../../../partial/db_connect.php";
        //  $dateTaken = date("Y-m-d");
        
?>

  

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> LS Classes | Admin </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      &nbsp;
      
      <span class="logo_name"><img src="../../../wp-content/uploads/2022/06/lswhite.png" style="width:50px;" alt="">&nbsp; &nbsp;LS-ADMIN</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Admin.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name" >Dashboard</a></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box'></i>
            <span class="links_name">Attendance</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Attendance  
          
        </span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
         

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Students</div>
            <div class="number">0</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Increasing</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Batches</div>
            <div class="number">1</div>
            
          </div>
      
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Courses</div>
            <div class="number">0</div>
            
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Classes</div>
            <div class="number">11,086</div>
            <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
              <span class="text">All Batch</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
  


    <div class="sales-boxes">

        <div class="recent-sales box">
          <div class="title">Create A Batch & Assign A Faculty</div>
          <br>  
            <form action="functions/batch.php" method="post">
              <input type="text" required name="batchname" placeholder="Write Batch Name">
              <input type="text" required name="facultyname" placeholder="Write Faculty Name">
           
              <input id="asg" type="submit" value="Assign" name="create">
              <style>
                #asg{
                  width: 100px;
                  padding: 5px;
                }
                input{
                  width: 200px;
                  padding: 5px;
                }
              </style>
              
            </form> 
          <div class="button">
            <!-- <a href="#">See All</a> -->
          </div>
          <br>
          <br>
          <br>
          <style>
            #att_St{
              /* display: flex; */
           }
            form{
              display: flex;
              
            }
          </style>
          <div id="att_st">
            <h3>Take Attendance :</h3>
            <br>
            




      
            <form action="Attendance.php" method="post">
              <?php
              include '../../partial/db_connect.php';  
       
              $fetch = "SELECT `Batches_Name`, `faculty_Name` FROM `batches` WHERE 1";
              $result = mysqli_query($connect_db_ls, $fetch);
              if($result){
                if(mysqli_num_rows($result)>0){
                echo "<select name='batch_fetch'>";
                echo "<option>"."Select A Course"."</option>";
               
                while($row=mysqli_fetch_array($result)){
                  echo "<option value='".$row['Batches_Name']."'>" . $row['Batches_Name'] . "</option>";
                  
                }
                echo "</select>";
                echo "<input type='date' name='dateinsert'>"."</input>";
              }
            }
          
?>
              &nbsp;
              &nbsp;
              &nbsp;
              <div>
                <input type="submit" value="Fetch Students List" name="fetch_St_list">
              </div>
              
            </form>
            <br>
            
            
          </div>
        </div>
        
        <div class="top-sales box">
          <div class="title">Live Batches</div>
          <ul>
          <?php
       include '../../partial/db_connect.php';  
       
         $fetch = "SELECT `Batches_Name`, `faculty_Name` FROM `batches` WHERE 1";
         $result = mysqli_query($connect_db_ls, $fetch);
         if($result){
           if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_array($result)){
               // print_r($row['username']);
?>
          <span>    <li><?php echo $row['0'];
          echo " ";
          echo "-";
          echo " ";
          echo $row['1'] ?></li>
            </span>
             
              <?php
             }
            }
          }
              ?>
          </ul>
          
        </div>
        
      </div>
      <div><style>
        table{
          margin: 20px;
          /* padding: 30px; */
        }
        table tr td{
          padding: 10px;
        }
        table tr th{
          margin: 30px;
          padding: 30px;
        }
        input{
          /* padding: 10px; */
        }
        #header-table{
          margin: 20px;
        }
        table, th, td {
  border:1px solid black;
}
      </style>
<form method="post" action='functions/attendance_backend.php' >
            <div class="row">
              <div class="col-lg-12"> 
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             
                  <h6 class="m-0 font-weight-bold text-danger">Note: <i>Click on the checkboxes besides each student to take attendance!</i></h6>
                </div>
                <div class="table-responsive p-3">
       
                  <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                      <tr>
                   
                        <th>Username</th>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>date</th>
                        <th>Status</th>
                        <th>Check</th>
                      </tr>
                    </thead>
                    
                    <tbody>

                  <?php
                   if(isset($_POST['fetch_St_list'])){
                   include '../../partial/db_connect.php';  
                  //  $dateTaken = date("Y-m-d");
                   $dateinsert=$_POST['dateinsert'];
                   $batch_fetch=$_POST['batch_fetch'];
                      $query = "SELECT * FROM `attendance` WHERE `date`='$dateinsert' and `Course`='$batch_fetch'";
                      $rs = mysqli_query($connect_db_ls,$query);
                      if(!$rs){
                        $qus=mysqli_query($connect_db_ls,"select * from attendance  where counter='$counter'");
                        while ($ros = $qus->fetch_assoc())
                        {
                
                            $qquery=mysqli_query($connect_db_ls,"insert into attendance(`username`,`Rollno`,`Name`,`Course`,`date`,) 
                            values('$ros[username]','$ros[Rollno]','$ros[Name]','$ros[Course]','$dateinsert')");
                
                          }
                       }
                        
                   
                      $num = $rs->num_rows;
                      $sn=0;
                      $status="";
                      if($num > 0)
                      { echo"  &nbsp; Select a Date to Take Attendance &nbsp;&nbsp; <input required name='datetake' type='date'  class='form-control'>";
                        while ($rows = $rs->fetch_assoc())
                          {
                             $sn = $sn + 1;
                             $status=$rows['Status'];
                             if($status==1){
                              $show="Present";
                             }
                             else if($status==2){
                              $show="absent ";
                             }
                             else{
                              $show="absent";
                             }
                            echo"
                            <br>
                          
                              <tr>
                                
                                <td>".$rows['username']."</td>
                                <td>".$rows['Rollno']."</td>
                                <td>".$rows['Name']."</td>
                                <td>".$rows['Course']."</td>
                                <td>".$rows['date']."</td>
                                <td>".$show."</td>
                                <td><input name='check[]' type='checkbox' value=".$rows['Rollno']." class='form-control'></td>
                              </tr>";
                              echo "<input name='Rollno' Style='display:none' required ' value=".$rows['Rollno']." type='hidden' class='form-control'>";
                              
                          }
                      } 
                      else
                      {
                        echo"
                        <br>
                        &nbsp; Select a Date to Take Attendance &nbsp;&nbsp; <input required name='datetake' type='date'  class='form-control'>
                          ";
                      }
                    }
                      ?>
                    </tbody>
                  </table>
                  <br>
                  &nbsp;  
                  <button type="submit" name="save" class="btn btn-primary">Take Attendance</button>
                  &nbsp;
                  <button type="submit" name="updateattendance" class="btn btn-primary">Update Next Day</button>
                  </form>
            </div>
            
    </div>
    
  </section>
  

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
