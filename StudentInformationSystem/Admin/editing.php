<?php
require("../config.php");
if(!empty($_POST))
{
	// if($_POST['roll'] == NULL)
	// {
	// 	$roll = 0;
	// }
	// else
	// {
	// 	$roll = $_POST['roll'];
	// }
	
	// $sql = mysqli_query($al, "UPDATE students SET first_name = '".ucwords($_POST['fn'])."', middle_name = '".ucwords($_POST['mn'])."', last_name = '".ucwords($_POST['ln'])."', gender = '".$_POST['gender']."', date_of_birth = '".$_POST['dob']."', contact_no = '".$_POST['mob']."', parents_contact_no = '".$_POST['pmob']."', email = '".strtolower($_POST['email'])."', adhaar_no = '".$_POST['adhaar']."', permanent_address = '".ucwords($_POST['addP'])."', correspondence_address = '".ucwords($_POST['addC'])."', roll_no = '".$roll."', branch = '".$_POST['branch']."', academic_year = '".$_POST['ac_year']."', year = '".$_POST['year']."', section = '".$_POST['section']."', category = '".$_POST['cat']."', caste = '".ucwords($_POST['caste'])."', sub_caste = '".ucwords($_POST['scaste'])."', ssc_roll = '".ucwords($_POST['ssc_roll'])."', ssc_marks_obtained = '".$_POST['ssc_mo']."', ssc_total_marks = '".$_POST['ssc_to']."', ssc_percentage = '".$_POST['ssc_per']."',board_type_1 = '".ucwords($_POST['board_type_1'])."', hssc_roll = '".ucwords($_POST['hssc_roll'])."', hssc_marks_obtained = '".$_POST['hssc_mo']."', hssc_total_marks = '".$_POST['hssc_to']."', hssc_percentage = '".$_POST['hssc_per']."',board_type_2 = '".ucwords($_POST['board_type_2'])."', kcet_marks = '".$_POST['cet_mo']."', jee_marks = '".$_POST['jee_mo']."' WHERE id = '".$_POST['id']."'");

    $sql = mysqli_query($al, "UPDATE students SET first_name = '".ucwords($_POST['fn'])."', middle_name = '".ucwords($_POST['mn'])."', last_name = '".ucwords($_POST['ln'])."', gender = '".$_POST['gender']."', date_of_birth = '".$_POST['dob']."', contact_no = '".$_POST['mob']."', parents_contact_no = '".$_POST['pmob']."', email = '".strtolower($_POST['email'])."', adhaar_no = '".$_POST['adhaar']."', permanent_address = '".ucwords($_POST['addP'])."', correspondence_address = '".ucwords($_POST['addC'])."', roll_no = '".$_POST['roll']."', course = '".$_POST['course']."', branch = '".$_POST['branch']."', academic_year = '".$_POST['ac_year']."', year = '".$_POST['year']."', section = '".$_POST['section']."', category = '".$_POST['cat']."', caste = '".ucwords($_POST['caste'])."', sub_caste = '".ucwords($_POST['scaste'])."', ssc_roll = '".ucwords($_POST['ssc_roll'])."', ssc_marks_obtained = '".$_POST['ssc_mo']."', ssc_total_marks = '".$_POST['ssc_to']."', ssc_percentage = '".$_POST['ssc_per']."',board_type_1 = '".ucwords($_POST['board_type_1'])."', hssc_roll = '".ucwords($_POST['hssc_roll'])."', hssc_marks_obtained = '".$_POST['hssc_mo']."', hssc_total_marks = '".$_POST['hssc_to']."', hssc_percentage = '".$_POST['hssc_per']."',board_type_2 = '".ucwords($_POST['board_type_2'])."', gate_roll = '".ucwords($_POST['gate_roll'])."', gate_marks_obtained = '".$_POST['gate_mo']."', gate_total_marks = '".$_POST['gate_to']."', gate_percentage = '".$_POST['gate_per']."',gate_rank = '".ucwords($_POST['gate_rank'])."', k_cet_marks = '".$_POST['cet_mo']."',k_cet_rank = '".ucwords($_POST['cet_rank'])."', jee_marks = '".$_POST['jee_mo']."',jee_rank = '".ucwords($_POST['jee_rank'])."' WHERE id = '".$_POST['id']."'");
	
	if(!$sql)
	{ 
		header("location:home.php?sankalp=".sha1('error')); 
	} 
	else 
	{  
		header("location:home.php?sankalp=".sha1('success'));
	}
}


$result = mysqli_query($al, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($al));
    exit();
}

if($_GET['sankalp'] == sha1('error'))
{
	$flag = 0;
}

?>