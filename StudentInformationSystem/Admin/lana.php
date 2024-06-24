
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "student_info");  
//  $query = "SELECT first_name,middle_name,last_name,date_of_birth FROM students WHERE branch = 'Computer Science Engineering'";
$branch1 = $_POST['branch'];

$query = "SELECT first_name,middle_name,last_name,gender,date_of_birth,contact_no,email,adhaar_no,permanent_address,correspondence_address,course,roll_no,branch,academic_year,year,section,category,caste,sub_caste,ssc_roll,ssc_marks_obtained,ssc_total_marks,ssc_percentage,board_type_1,hssc_roll,hssc_marks_obtained,hssc_total_marks,hssc_percentage,board_type_2,gate_roll,gate_marks_obtained,gate_total_marks,gate_percentage,gate_rank,k_cet_marks,k_cet_rank,jee_marks,jee_rank FROM students WHERE branch='$branch1' ORDER BY roll_no ASC";
 $result = mysqli_query($connect, $query);
   
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Export</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:1200px;">  
                <h2 align="center">Export to CSV</h2>  
                <h3 align="center">Student Information</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="student_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <!-- <th width="5%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Address</th>  
                               <th width="10%">Gender</th>  
                               <th width="20%">Designation</th>  
                               <th width="5%">Age</th>   -->
                               <th width="25%">Roll No.</th>
                               <th width="25%">First Name</th> 
                               <th width="25%">Middle Name</th>
                               <th width="25%">Last Name</th> 
                               <th width="25%">Course</th>
                               <th width="25%">Branch</th>
                               <th width="25%">Gender</th>
                               <th width="25%">Date Of Birth</th>
                               <th width="25%">Contact No.</th>
                               <th width="25%">Email ID</th>
                               <th width="25%">Adhaar No.</th> 
                               <th width="25%">Perm Address</th>
                               <th width="25%">Corr Address</th>
                               <th width="25%">Year</th>
                               
                               
                               
                               
                                
                          </tr> 
                          
                          
                          <?php foreach($result as $row):?>
                              <tr>
                                <td><?php echo $row ['roll_no']?></td>
                                <td><?php echo $row ['first_name']?></td>
                                <td><?php echo $row ['middle_name']?></td>
                                <td><?php echo $row ['last_name']?></td>
                                <td><?php echo $row ['course']?></td>
                                <td><?php echo $row ['branch']?></td>
                                <td><?php echo $row ['gender']?></td>
                                <td><?php echo $row ['date_of_birth']?></td>
                                <td><?php echo $row ['contact_no']?></td>
                                <td><?php echo $row ['email']?></td>
                                <td><?php echo $row ['adhaar_no']?></td>
                                <td><?php echo $row ['permanent_address']?></td>
                                <td><?php echo $row ['correspondence_address']?></td>
                                <td><?php echo $row ['year']?></td>
                                

                              </tr>
                        <?php endforeach; ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html> 