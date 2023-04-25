
<?php 
              
              if(isset($_POST['fetch_St_list'])){
                include '../../partial/db_connect.php';  
                $batch_fetch=$_POST['batch_fetch'];
                $fetch = "SELECT * FROM `attendance` WHERE `Course`='$batch_fetch'";
               
                $result = mysqli_query($connect_db_ls, $fetch);
                
               
                
                if($result){  
                  if(mysqli_num_rows($result)>0){
                    
                  echo  "<h1 id='header-table'>"."Following Students Are Exist In This Course :- "."</h1>";
                  
                    echo "<table id='table'>";
                      echo "<tr>";
                      // echo "<th>"."username"." ";
                        echo "<th>"."Name"."</th>";
                        echo "<th>"." Roll No"."</th> ";
                        echo "<th>"."Course"."</th> ";
                        echo "<th>"."Status"."</th> ";
                        echo "<th>"."Present/Absent"."</th> ";
                        
                
                    while($row=mysqli_fetch_assoc($result)){
                      echo "<form method='post' action='functions/attendance_func.php'>";
                      echo "<tr>";

                          // echo " <td>"."<input disabled type='text' Value='".$row['0']."' name='user_Cr' >"."</td>";
                          echo " <td>".$row['Name']." "."</td>";
                          echo " <td>".$row['Rollno']." "."</td>";
                          echo " <td>".$row['Course']." "."</td>";
                          echo " <td>".$row['Status']." "."</td>";
                          // $username_row=$row['username'];
                          
                          echo "<td>"."<input  type='checkbox' name='st_at' value='".$row['Rollno']."'>"."</td>";
                          echo "<input style='display:none;' type='text'  Value='".$row['Rollno']."' name='user_Cr'>";
                          // echo "<td>"."<input type='radio' name='st_at' value='Present'>"."</td>";
                          
                        echo "</tr>";
                    }
                   
                    echo "<input  type='submit'  Value='Fetch Data' name='attendance_St'>";
                    echo "</form>";
                        echo "</th>";
                        echo "</th>";
                        echo "</th>";
                      echo "</tr>";
                  echo "<table>";
                  }
                }
              }
            ?>










if(isset($_POST['attendance_St'])){
            
            include "../../../partial/db_connect.php";

            
            $Rollno=$_POST['user_Cr'];
            
            $attendance=$_POST['st_at'];
            $number=count((array)$Rollno);
            
            // if($count>0){
            //   echo "Attendance Taken";
            // }
            
              for($i=0; $i < $number; $i++){
                $Rollno[$i];

                if(isset($attendance[$i])){
                  // $null=NULL;
                  $update="UPDATE `attendance` SET `Status`='Present' WHERE `Rollno`=' $Rollno[$i]'";
                  // $fetch_absenties="UPDATE `attendance` SET `Status`='Absent' WHERE `Statis`='$null'";
                  // if($fetch_absenties){
                    
                  // }
                  $result=mysqli_query($connect_db_ls,$update);
                  if($result){
                    echo "Working !";
                    header("location: ../Attendance.php");
                  }
                  else{
                    echo "Error";
                  }
                }
              }
            }