<?php
require("config.php");
$flag = 2;
if(!empty($_POST))
{
	if($_POST['roll'] == NULL)
	{
		$roll = 0;
	}
	else
	{
		$roll = $_POST['roll'];
	}
	$_SESSION['fn'] = $_POST['fn'];
	$_SESSION['mn'] = $_POST['mn'];
	$_SESSION['ln'] = $_POST['ln'];
	$_SESSION['gender'] = $_POST['gender'];
	$_SESSION['dob'] = $_POST['dob'];
	$_SESSION['mob'] = $_POST['mob'];
	$_SESSION['pmob'] = $_POST['pmob'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['adhaar'] = $_POST['adhaar'];
	$_SESSION['addP'] = $_POST['addP'];
	$_SESSION['addC'] = $_POST['addC'];

	$_SESSION['course'] = $_POST['course'];
	$_SESSION['roll'] = $_POST['roll'];
	$_SESSION['branch'] = $_POST['branch'];
	$_SESSION['ac_year'] = $_POST['ac_year'];
	$_SESSION['year'] = $_POST['year'];
	$_SESSION['section'] = $_POST['section'];
	$_SESSION['cat'] = $_POST['cat'];
	$_SESSION['caste'] = $_POST['caste'];
	$_SESSION['scaste'] = $_POST['scaste'];
	
	
	$_SESSION['ssc_roll'] = $_POST['ssc_roll'];
	$_SESSION['ssc_mo'] = $_POST['ssc_mo'];
	$_SESSION['ssc_to'] = $_POST['ssc_to'];
	$_SESSION['ssc_per'] = $_POST['ssc_per'];
	$_SESSION['board_type_1'] = $_POST['board_type_1'];
	
	
	$_SESSION['hssc_roll'] = $_POST['hssc_roll'];
	$_SESSION['hssc_mo'] = $_POST['hssc_mo'];
	$_SESSION['hssc_to'] = $_POST['hssc_to'];
	$_SESSION['hssc_per'] = $_POST['hssc_per'];
	$_SESSION['board_type_2'] = $_POST['board_type_2'];

	$_SESSION['gate_roll'] = $_POST['gate_roll'];
	$_SESSION['gate_mo'] = $_POST['gate_mo'];
	$_SESSION['gate_to'] = $_POST['gate_to'];
	$_SESSION['gate_per'] = $_POST['gate_per'];
	$_SESSION['gate_rank'] = $_POST['gate_rank'];
	
	$_SESSION['cet_mo'] = $_POST['cet_mo'];
	$_SESSION['cet_rank'] = $_POST['cet_rank'];
	$_SESSION['jee_mo'] = $_POST['jee_mo'];
	$_SESSION['jee_rank'] = $_POST['jee_rank'];
	
	
	$sql = mysqli_query($al, "INSERT INTO students(first_name,middle_name,last_name,gender,date_of_birth,contact_no,parents_contact_no,email,adhaar_no,permanent_address,correspondence_address,roll_no,course,branch,academic_year,year,section,category,caste,sub_caste,ssc_roll,ssc_marks_obtained,ssc_total_marks,ssc_percentage,board_type_1,hssc_roll,hssc_marks_obtained,hssc_total_marks,hssc_percentage,board_type_2,gate_roll,gate_marks_obtained,gate_total_marks,gate_percentage,gate_rank,k_cet_marks,k_cet_rank,jee_marks,jee_rank,time,date,ip,agent) VALUES('".ucwords($_POST['fn'])."', '".ucwords($_POST['mn'])."', '".ucwords($_POST['ln'])."', '".$_POST['gender']."', '".$_POST['dob']."', '".$_POST['mob']."', '".$_POST['pmob']."', '".strtolower($_POST['email'])."', '".$_POST['adhaar']."', '".ucwords($_POST['addP'])."', '".ucwords($_POST['addC'])."', '".$roll."', '".$_POST['course']."', '".$_POST['branch']."', '".$_POST['ac_year']."', '".$_POST['year']."', '".$_POST['section']."', '".$_POST['cat']."', '".ucwords($_POST['caste'])."', '".ucwords($_POST['scaste'])."', '".ucwords($_POST['ssc_roll'])."', '".$_POST['ssc_mo']."', '".$_POST['ssc_to']."', '".$_POST['ssc_per']."', '".$_POST['board_type_1']."', '".ucwords($_POST['hssc_roll'])."', '".$_POST['hssc_mo']."', '".$_POST['hssc_to']."', '".$_POST['hssc_per']."', '".$_POST['board_type_2']."', '".ucwords($_POST['gate_roll'])."', '".$_POST['gate_mo']."', '".$_POST['gate_to']."', '".$_POST['gate_per']."', '".$_POST['gate_rank']."', '".$_POST['cet_mo']."', '".$_POST['cet_rank']."', '".$_POST['jee_mo']."', '".$_POST['jee_rank']."', '".date('h:i:s A')."', '".date('d/m/Y')."', '".$_SERVER['REMOTE_ADDR']."', '".$_SERVER['HTTP_USER_AGENT']."')");

	
	
	if(!$sql)
	{ 
		header("location:index.php?sankalp=".sha1('error')); 
	} 
	else 
	{  
		session_destroy();
		header("location:success.php?sankalp=".sha1('success'));
	}
}

if($_GET['sankalp'] == sha1('error'))
{
	$flag = 0;
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Information Portal</title>
<link href="Sankalp.css" rel="stylesheet" type="text/css">
<script>

    function Address(f) {

        if(f.add.checked == true) {

           f.addC.value = f.addP.value;
        }

        if(f.add.checked == false) {
			 f.addC.value = '';

        }

    }
	
	function PercentSSC(a) {
		var x = a.ssc_mo.value;
		var y = a.ssc_to.value;
		var per = (x/y)*100;
		var perr = parseFloat(per).toFixed( 2 );
		a.ssc_per.value = perr;
		
		
	}
	
	function PercentHSSC(b) {
		var x = b.hssc_mo.value;
		var y = b.hssc_to.value;
		var per = (x/y)*100;
		var perr = parseFloat(per).toFixed( 2 );
		b.hssc_per.value = perr;	
		
	}

	function PercentGate(c) {
		var x = c.gate_mo.value;
		var y = c.gate_to.value;
		var per = (x/y)*100;
		var perr = parseFloat(per).toFixed( 2 );
		c.gate_per.value = perr;	
		
	}

</script>
</head>
<body>
	
<div id="header" align="center">
	<span class="heading"><marquee direction="left" behaviour="slide">MANGALORE INSTITUTE OF TECHNOLOGY AND ENGINEERING, MANGALORE</marquee></span>

</div>
<br>
<br>

<div align="center">

<br>
<br>
<br>
<br>
<br>

<div id="content">
<br>

<span class="subHead">STUDENT INFORMATION REGISTRATION PANEL</span>
<br>
<br>
<hr />
<span class="Text">Personal Information</span>
<hr />
<br>

<form method="post" action="">
<?php if($flag == 0)
{
	?>
	<span class="flashFalse">Adhaar No. or Email Id Already Exists</span>
<?php } ?>
<br>
<br>

<input type="text" placeholder="First Name" required size="40" class="cap" name="fn" title="Enter First Name" value="<?php echo $_SESSION['fn'];?>"  />
<br>
<br>
<input type="text" placeholder="Middle Name" required size="40" class="cap" name="mn" title="Enter Middle Name" value="<?php echo $_SESSION['mn'];?>" />
<br>
<br>
<input type="text" placeholder="Last Name" required size="40" class="cap" name="ln" title="Enter Last Name" value="<?php echo $_SESSION['ln'];?>" />
<br>
<br>
<input type="radio" value="Male" name="gender" title="Gender" required /><span class="Text" title="Gender">Male</span>
<input type="radio" value="Female" name="gender" title="Gender" /><span class="Text" title="Gender">Female</span>
<input type="radio" value="Others" name="gender" title="Gender" /><span class="Text" title="Gender">Others</span>
<br>
<br>
<input type="date" name="dob" title="Enter Date of Birth" placeholder="Date of Birth" required value="<?php echo $_SESSION['dob'];?>" /> <br>
<span class="Text">Eg. 31/12/2017</span>
<br>
<br>
<input type="text" name="mob" title="Enter Contact No." placeholder="Contact Number" size="30" required maxlength="10" value="<?php echo $_SESSION['mob'];?>" />
<br>
<br>
<input type="text" name="pmob" title="Enter Parents Contact No." placeholder="Parents Contact Number" size="30" required maxlength="10" value="<?php echo $_SESSION['pmob'];?>" />
<br>
<br>
<input type="email" name="email" title="Enter Email-ID" placeholder="Email ID" size="40" required value="<?php echo $_SESSION['email'];?>" />
<br>
<br>
<input type="text" name="adhaar" title="Enter 12 Digit Adhaar No." placeholder="12 Digit Adhaar No." required maxlength="12" size="30" value="<?php echo $_SESSION['adhaar'];?>" />
<br>
<br>
<textarea rows="2" cols="40" name="addP" title="Enter Permanent Address" placeholder="Enter Permanent Address" required id="addP" class="cap"><?php echo $_SESSION['addP'];?></textarea>
<br>
<br>
<input type="checkbox" onclick="Address(this.form)" name="add">
<span class="Text">Check this box if Permanent Address and Correspondence Address are the same</span>
<br>
<br>
<textarea rows="2" cols="40" name="addC" title="Enter Correspondence Address" placeholder="Enter Correspondence Address" required id="addC" class="cap"><?php echo $_SESSION['addC'];?></textarea>
<br>
<br>
<hr />
<span class="Text">College Information</span>
<hr />
<br>

<input type="radio" value="UG" name="course" title="Course" required /><span class="Text" title="Course">UG</span>
<input type="radio" value="PG" name="course" title="Course" /><span class="Text" title="Course">PG</span>
<br>
<br>
<input type="text" name="roll" title="Enter USN" placeholder="USN"size="30" required maxlength="10" value="<?php echo $_SESSION['roll'];?>"/>
<br>
<br>
<select name="branch" required title="Select Branch">
<option value="NA" selected disabled > ~ ~ Branch ~ ~</option>
<option value="Aeronautical Engineering">Aeronautical Engineering</option>
<option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
<option value="Computer Science and Engineering">Computer Science and Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Electronics and Commumnication Engineering">Electronics and Commumnication Engineering</option>
<option value="Information Science and Engineering">Information Science and Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Mechatronics Engineering">Mechatronics Engineering</option>
</select>
<br>
<br>
<select name="ac_year" required title="Select Academic Year">
<option value="NA" selected disabled > ~ ~ Academic Year ~ ~</option>
<option value="2019-2020">2019-2020</option>
<option value="2020-2021">2020-2021</option>
<option value="2021-2022">2021-2022</option>
<option value="2022-2023">2022-2023</option>
</select>

<select name="year" required title="Select Year">
<option value="NA" selected disabled > ~ ~ Year ~ ~</option>
<option value="First Year">I Year</option>
<option value="Second Year">II Year</option>
<option value="Third Year">III Year</option>
<option value="Final Year">IV Year</option>
</select>

<select name="section" required title="Select Section">
<option value="NA" selected disabled > ~ ~ Section ~ ~</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>

</select>
<br>
<br>
<span class="Text">Category : </span><input type="radio" name="cat" value="OPEN" required title="OPEN" /> <span class="Text" title="OPEN">Open</span> <input type="radio" name="cat" value="RESERVED" required title="RESERVED" /> <span class="Text" title="RESERVED">Reserved</span>
<br>
<br>
 <input type="text" name="caste" required size="20" title="Enter Caste" placeholder="Caste" value="<?php echo $_SESSION['caste'];?>" class="cap" />
 <br>
 <br>
<input type="text" name="scaste" size="20" title="Enter Sub-Caste" placeholder="Sub-Caste" value="<?php echo $_SESSION['scaste'];?>" class="cap" />
<br>
<br>
<br>
<!-- SSC -->

<input type="text" placeholder="SSC Roll No" title="Enter SSC Roll No." name="ssc_roll" required class="cap" size="20"  value="<?php echo $_SESSION['ssc_roll'];?>"/>
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="ssc_mo" id="ssc_mo" size="14" required  value="<?php echo $_SESSION['ssc_mo'];?>"/> 
<span class="Text">/ 
<input type="text" placeholder="Total Marks" name="ssc_to" id="ssc_to" size="14" required title="Enter Total Marks"  value="<?php echo $_SESSION['ssc_to'];?>"/>
=
<input type="text" placeholder="Percentage" name="ssc_per" id="ssc_per" size="14" required title="Enter Percentage" onFocus="PercentSSC(this.form)"  value="<?php echo $_SESSION['PercentSSC(this.form)'];?>"/>
%</span>
<br>


<input type="radio" value="State" name="board_type_1" title="Board" required /><span class="Text1" title="Board">State</span>
<input type="radio" value="CBSE" name="board_type_1" title="Board" /><span class="Text1" title="Board">CBSE</span>
<input type="radio" value="ICSE" name="board_type_1" title="Board" /><span class="Text1" title="Board">ICSE</span>
<input type="radio" value="Other" name="board_type_1" title="Board" /><span class="Text1" title="Board">Other</span>
<br>
<br>

<!-- HSSC --> 

<input type="text" placeholder="HSSC Roll No" title="Enter HSSC Roll No." name="hssc_roll" required class="cap" size="20"  value="<?php echo $_SESSION['hssc_roll'];?>"/>
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="hssc_mo" id="hssc_mo" size="14" required  value="<?php echo $_SESSION['hssc_mo'];?>"/> 
<span class="Text">/ 
<input type="text" placeholder="Total Marks" name="hssc_to" id="hssc_to" size="14" required title="Enter Total Marks"  value="<?php echo $_SESSION['hssc_to'];?>"/>
=

<input type="text" placeholder="Percentage" name="hssc_per" id="hssc_per" size="14" required title="Enter Percentage" onFocus="PercentHSSC(this.form)"  value="<?php echo $_SESSION['PercentHSSC(this.form)'];?>"/>
%
<br>
<input type="radio" value="State" name="board_type_2" title="Board" required /><span class="Text2" title="Board">State</span>
<input type="radio" value="CBSE" name="board_type_2" title="Board" /><span class="Text2" title="Board">CBSE</span>
<input type="radio" value="ICSE" name="board_type_2" title="Board" /><span class="Text2" title="Board">ICSE</span>
<input type="radio" value="Other" name="board_type_2" title="Board" /><span class="Text2" title="Board">Other</span>
<br>
<br>

<!-- GATE --> 

<input type="text" placeholder="GATE Roll No" title="Enter GATE Roll No." name="gate_roll" required class="cap" size="20"  value="<?php echo $_SESSION['gate_roll'];?>"/>
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="gate_mo" id="gate_mo" size="14" required  value="<?php echo $_SESSION['gate_mo'];?>"/> 
<span class="Text">/ 
<input type="text" placeholder="Total Marks" name="gate_to" id="gate_to" size="14" required title="Enter Total Marks"  value="<?php echo $_SESSION['gate_to'];?>"/>
=

<input type="text" placeholder="Percentage" name="gate_per" id="gate_per" size="14" required title="Enter Percentage" onFocus="PercentGate(this.form)"  value="<?php echo $_SESSION['PercentGate(this.form)'];?>"/>
%
<br>
<br>
<input type="text" placeholder="GATE Rank" title="Enter Rank" name="gate_rank" id="gate_rank" size="14" required title="Enter GATE Rank" value="<?php echo $_SESSION['gate_rank'];?>"/> 

<br>
<br>

<!-- KCET -->
KCET 
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="cet_mo" id="cet_mo" size="14" required title="Enter KCET Marks" value="<?php echo $_SESSION['cet_mo'];?>"/> 
<input type="text" placeholder="Rank" title="Enter Rank" name="cet_rank" id="cet_rank" size="14" required title="Enter KCET Rank" value="<?php echo $_SESSION['cet_rank'];?>"/> 
<br>
<br>


<!-- JEE -->
JEE 
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="jee_mo" id="jee_mo" size="14" required title="Enter JEE Marks" value="<?php echo $_SESSION['jee_mo'];?>"/> 
<input type="text" placeholder="Rank" title="Enter Rank" name="jee_rank" id="jee_rank" size="14" required title="Enter JEE Rank" value="<?php echo $_SESSION['jee_rank'];?>"/> 
<br>
<br>



<!-- MTECH
GATE
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="gate_mo" id="gate_mo" size="14" value="<?php echo $_SESSION['gate_mo'];?>"/> 
<input type="text" placeholder="Rank" title="Enter Rank" name="gate_rank" id="gate_rank" size="4" value="<?php echo $_SESSION['gate_rank'];?>"/>  -->
<br>
<br>
<input type="submit" value="SAVE" onClick="return confirm('Are You Sure..?')" /> 
<input type="reset" value="CLEAR" />
</span>

</form>
<br>
<br>

</div>
<br>
<br>
<br>
<br>
<br>
<?php require("footer.php");?>
</body>
<!-- Designed & Developed by Tech Vegan https://bit.ly/2MFT35Q 
		NOT FOR SELLING PURPOSE

        CAN USE FOR COLLEGE/SCHOOL PROJECT SUBMISSION
       
        For More Subscribe YouTube Channel "Tech Vegan" https://bit.ly/2MFT35Q
        
        DESIGNED WITH LOVE FOR ALL
--> </html>
