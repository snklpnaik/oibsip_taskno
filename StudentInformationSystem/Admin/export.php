

 <?php  
      //export.php  

// global $branch1;
// $branch=$_POST['branch'];        WHERE branch='$branch1'
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "student_info");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Roll No.','First Name', 'Middle Name', 'Last Name','Gender','DOB','Contact No.','Email','Adhaar No.','Perm Address','Corr Address','Course','Branch','Acd Year','Purs Year','Section','Category','Caste','Sub-Caste','SSC Roll No.','SSC Marks','SSC Total Marks','SSC Percentage','SSC Board','HSSC Roll No.','HSSC Marks','HSSC Total Marks','HSSC Percentage','HSSC Board','GATE Roll No.','GATE Marks','GATE Total Marks','GATE Percentage','GATE Rank','KCET Marks','KCET Rank','JEE Marks','JEE Rank'));  
      $query = "SELECT roll_no,first_name,middle_name,last_name,gender,date_of_birth,contact_no,email,adhaar_no,permanent_address,correspondence_address,course,branch,academic_year,year,section,category,caste,sub_caste,ssc_roll,ssc_marks_obtained,ssc_total_marks,ssc_percentage,board_type_1,hssc_roll,hssc_marks_obtained,hssc_total_marks,hssc_percentage,board_type_2,gate_roll,gate_marks_obtained,gate_total_marks,gate_percentage,gate_rank,k_cet_marks,k_cet_rank,jee_marks,jee_rank FROM students ORDER BY roll_no ASC";
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 
 ?>