<?php
require("../config.php");
if(!isset($_SESSION['lid']))
{
	header("location:index.php?sankalp".sha1('sankalp'));
}
$v = mysqli_fetch_array(mysqli_query($al, "SELECT * FROM admin WHERE loginid = '".$_SESSION['lid']."'"));
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="600; url=logout.php" />
<title>Student Information Portal</title>
<link href="../sankalp.css" rel="stylesheet" type="text/css">
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
<span class="heading">MANGALORE INSTITUTE OF TECHNOLOGY AND ENGINEERING, MANGALORE</span>
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
<span class="Text">Welcome <span style="color:rgba(124,245,39,1.00);"><?php echo $v['name'];?></span></span>
<hr />
<br>
<form method="post" action="lana.php">
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

<input type="submit" value="Export Information" />
</form>
<br>
<hr />
<br>
<!-- ------------------------------------------------------------------------------------------------------- -->

<?php if($_GET['sankalp'] == sha1('error'))
{
	?>
<span class="Text">N O T I F I C A T I O N</span>
<hr />
<br>
<span class="flashFalse"> Error Updating Information </span>
<br>
<?php }elseif($_GET['sankalp'] == sha1('success'))
{
	?>
<span class="Text">N O T I F I C A T I O N</span>
<hr />
<br>
<span class="flashTrue"> Information Successfully Updated </span>
<br>
<?php }elseif($_GET['msg'] == sha1('1'))
{
	?>
<span class="Text">N O T I F I C A T I O N</span>
<hr />
<br>
<span class="flashFalse"> Passwords Doesn't Matched </span>
<br>
<?php }elseif($_GET['msg'] == sha1('2'))
{
	?>
<span class="Text">N O T I F I C A T I O N</span>
<hr />
<br>
<span class="flashFalse"> Incorrect Current Password </span>
<br>
<?php }elseif($_GET['msg'] == sha1('3'))
{
	?>
<span class="Text">N O T I F I C A T I O N</span>
<hr />
<br>
<span class="flashTrue"> Password Successfully Updated </span>
<br>
<?php } ?>

<!-- ------------------------------------------------------------------------------------------------------- -->
<br>

<input type="button" value="Edit Information" onClick="window.location='home.php?sankalp=<?php echo sha1('edit');?>'" />
<input type="button" value="Change Password" onClick="window.location='home.php?sankalp=<?php echo sha1('changePassword');?>'" />
<br>
<br>

</div>

<br>
<br>
<?php 
if($_GET['sankalp'] == sha1('edit'))
{
	?>
<div id="content">
<br>
<span class="subHead">EDIT STUDENT INFORMATION</span>
<br>
<br>
<form method="get" action="">
<select name="email" required>
<option  value="0" disabled selected>- - Select Email - -</option>

<?php
$em = mysqli_query($al, "SELECT * FROM students");
while($x = mysqli_fetch_array($em))
{
	?>
		<option value="<?php echo $x['email'];?>"><?php echo $x['email'];?></option>
        <?php } ?>
<br>
<br>
<input type="hidden" name="sankalp" value="<?php echo sha1('editing');?>" />
</select>
<input type="submit" value="VIEW" />
</form>
<br>
<br>
</div>
<?php } 
elseif($_GET['sankalp'] == sha1('editing'))
{
	$r = mysqli_query($al, "SELECT * FROM students WHERE email = '".$_GET['email']."'");
	$e = mysqli_fetch_array($r);
	if(!mysqli_num_rows($r) == 1)
	{
	 	header("location:home.php?sankalp=".sha1('error'));
	}
?>
<div id="content">
<br>
<span class="subHead">EDIT INFORMATION [ <span style="color:rgba(124,245,39,1.00);"><?php echo $_GET['email'];?></span> ]
<br>
<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<form method="post" action="editing.php">
<input type="text" placeholder="First Name" required size="40" class="cap" name="fn" title="Enter First Name" value="<?php echo $e['first_name'];?>"  />
<br>
<br>
<input type="text" placeholder="Middle Name" required size="40" class="cap" name="mn" title="Enter Middle Name" value="<?php echo $e['middle_name'];?>" />
<br>
<br>
<input type="text" placeholder="Last Name" required size="40" class="cap" name="ln" title="Enter Last Name" value="<?php echo $e['last_name'];?>" />
<br>
<br>
<input type="radio" value="Male" name="gender" title="gender" required <?php if($e['gender'] == "Male") { echo "checked"; } ?> /><span class="Text" title="gender">Male</span>
<input type="radio" value="Female" name="gender" title="gender" <?php if($e['gender'] == "Female") { echo "checked"; } ?> /><span class="Text" title="gender">Female</span>
<input type="radio" value="Others" name="gender" title="gender" <?php if($e['gender'] == "Others") { echo "checked"; } ?> /><span class="Text" title="gender">Others</span>
<br>
<br>
<input type="date" name="dob" title="Enter Date of Birth" placeholder="Date of Birth" required value="<?php echo $e['date_of_birth'];?>" /> <br>
<span class="Text">Eg. 31/12/2017</span>
<br>
<br>
<input type="text" name="mob" title="Enter Contact No." placeholder="Contact Number" size="30" required maxlength="10" value="<?php echo $e['contact_no'];?>" />
<br>
<br>
<input type="text" name="pmob" title="Enter Parents Contact No." placeholder="Parents Contact Number" size="30" required maxlength="10" value="<?php echo $e['parents_contact_no'];?>" />
<br>
<br>
<input type="email" name="email" title="Enter Email-ID" placeholder="Email ID" size="40" required value="<?php echo $e['email'];?>" />
<br>
<br>
<input type="text" name="adhaar" title="Enter 12 Digit Adhaar No." placeholder="12 Digit Adhaar No." required maxlength="12" size="30" value="<?php echo $e['adhaar_no'];?>" />
<br>
<br>
<textarea rows="2" cols="40" name="addP" title="Enter Permanent Address" placeholder="Enter Permanent Address" required id="addP" class="cap"><?php echo $e['permanent_address'];?></textarea>
<br>
<br>
<input type="checkbox" onclick="Address(this.form)" name="add">
<span class="Text">Check this box if Permanent Address and Correspondence Address are the same.</span>
<br>
<br>
<textarea rows="2" cols="40" name="addC" title="Enter Correspondence Address" placeholder="Enter Correspondence Address" required id="addC" class="cap"><?php echo $e['correspondence_address'];?></textarea>
<br>
<br>
<hr />
<span class="Text">College Information</span>
<hr />
<br>
<input type="radio" value="UG" name="course" title="course" required <?php if($e['course'] == "UG") { echo "checked"; } ?> /><span class="Text" title="course">UG</span>
<input type="radio" value="PG" name="course" title="course" <?php if($e['course'] == "PG") { echo "checked"; } ?> /><span class="Text" title="course">PG</span>
<br>
<br>

<input type="text" name="roll" title="Enter USN" placeholder="USN" value="<?php echo $e['roll_no'];?>"/>
<br>
<br>


<select name="branch" required title="Select Branch">
<!-- <option value="NA" selected disabled > ~ ~ Branch ~ ~</option> -->
<option value="Aeronautical Engineering"<?php if($e['branch']=="Aeronautical Engineering")echo "selected";?>>Aeronautical Engineering</option>
<option value="Artificial Intelligence and Machine Learning"<?php if($e['branch']=="Artificial Intelligence and Machine Learning")echo "selected";?>>Artificial Intelligence and Machine Learning</option>
<option value="Computer Science and Engineering"<?php if($e['branch']=="Computer Science and Engineering")echo "selected";?>>Computer Science and Engineering</option>
<option value="Civil Engineering"<?php if($e['branch']=="Civil Engineering")echo "selected";?>>Civil Engineering</option>
<option value="Electronics and Commumnication Engineering"<?php if($e['branch']=="Electronics and Commumnication Engineering")echo "selected";?>>Electronics and Commumnication Engineering</option>
<option value="Information Science and Engineering"<?php if($e['branch']=="Information Science and Engineering")echo "selected";?>>Information Science and Engineering</option>
<option value="Mechanical Engineering"<?php if($e['branch']=="Mechanical Engineering")echo "selected";?>>Mechanical Engineering</option>
<option value="Mechatronics Engineering"<?php if($e['branch']=="Mechatronics Engineering")echo "selected";?>>Mechatronics Engineering</option>
</select>
<br>
<br>

<select name="ac_year" required title="Select Academic Year">
<option value="NA" disabled > ~ ~ Academic Year ~ ~</option>
<option value="2019-2020" <?php if($e['academic_year'] == "2019-2020")echo "selected";?>>2019-2020</option>
<option value="2020-2021" <?php if($e['academic_year'] == "2020-2021")echo "selected";?>>2020-2021</option>
<option value="2021-2022" <?php if($e['academic_year'] == "2021-2022")echo "selected";?>>2021-2022</option>
<option value="2022-2023" <?php if($e['academic_year'] == "2022-2023")echo "selected";?>>2022-2023</option>
</select>

<select name="year" required title="Select Year">
<option value="NA" disabled >~ ~ Year ~ ~</option>
<option value="I Year" <?php if($e['year'] == "I Year")echo "selected";?>>I Year</option>
<option value="II Year" <?php if($e['year'] == "II Year")echo "selected";?>>II Year</option>
<option value="III Year" <?php if($e['year'] == "III Year")echo "selected";?>>III Year</option>
<option value="IV Year" <?php if($e['year'] == "IV Year")echo "selected";?>>IV Year</option>
</select>

<select name="section" required title="Select Section">
<option value="NA" disabled > ~ ~ Section ~ ~</option>
<option value="01" <?php if($e['section'] == "01")echo "selected";?>>01</option>
<option value="02" <?php if($e['section'] == "02")echo "selected";?>>02</option>
<option value="03" <?php if($e['section'] == "03")echo "selected";?>>03</option>

</select>
<br>
<br>
<span class="Text">Category : </span><input type="radio" name="cat" value="OPEN" required title="OPEN" <?php if($e['category'] == "OPEN")echo "checked";?> /> 
		<span class="Text" title="OPEN">Open</span> 
									<input type="radio" name="cat" value="RESERVED" required title="RESERVED" <?php if($e['category'] == "RESERVED")echo "checked";?> /> 
		<span class="Text" title="RESERVED">Reserved</span>
<br>
<br>
 <input type="text" name="caste" required size="20" title="Enter Caste" placeholder="Caste" value="<?php echo $e['caste'];?>" class="cap" />
 <br>
 <br>
<input type="text" name="scaste" size="20" title="Enter Sub-Caste" placeholder="Sub-Caste" value="<?php echo $e['sub_caste'];?>" class="cap" />
<br>
<br>
<!-- SSC -->
<br>
<br>
<input type="text" placeholder="SSC Roll No" title="Enter SSC Roll No." name="ssc_roll" required class="cap" size="20"  value="<?php echo $e['ssc_roll'];?>"/>
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="ssc_mo" id="ssc_mo" size="14" required  value="<?php echo $e['ssc_marks_obtained'];?>"/> 
<span class="Text">/ 
<input type="text" placeholder="Total Marks" name="ssc_to" id="ssc_to" size="14" required title="Enter Total Marks"  value="<?php echo $e['ssc_total_marks'];?>"/>
=
<input type="text" placeholder="Percentage" name="ssc_per" id="ssc_per" size="14" required title="Enter Percentage" onFocus="PercentSSC(this.form)"   value="<?php echo $e['PercentSSC(this.form)'];?>"/>
%</span>
<br>
<span class="Text1">Board : </span><input type="radio" name="board_type_1" value="State" required title="State" <?php if($e['board_type_1']=="State")echo "checked";?> /> 
		<span class="Text1"title="State">State</span> 
									<input type="radio" name="board_type_1" value="CBSE" required title="CBSE" <?php if($e['board_type_1']=="CBSE")echo "checked";?> /> 
		<span class="Text1"title="CBSE">CBSE</span>
									<input type="radio" name="board_type_1" value="ICSE" required title="ICSE" <?php if($e['board_type_1']=="ICSE")echo "checked";?> /> 
		<span class="Text1"title="ICSE">ICSE</span>
									<input type="radio" name="board_type_1" value="Other" required title="Other" <?php if($e['board_type_1']=="Other")echo "checked";?> /> 
		<span class="Text1"title="Other">Other</span>

<br>
<br>

<!-- HSSC --> 


<br>
<input type="text" placeholder="HSSC Roll No" title="Enter HSSC Roll No." name="hssc_roll" required class="cap" size="20"  value="<?php echo $e['hssc_roll'];?>"/>
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="hssc_mo" id="hssc_mo" size="14" required  value="<?php echo $e['hssc_marks_obtained'];?>"/> 
<span class="Text">/ 
<input type="text" placeholder="Total Marks" name="hssc_to" id="hssc_to" size="14" required title="Enter Total Marks"  value="<?php echo $e['hssc_total_marks'];?>"/>
=
<input type="text" placeholder="Percentage" name="hssc_per" id="hssc_per" size="14" required title="Enter Percentage"onFocus="PercentHSSC(this.form)"  value="<?php echo $e['PercentHSSC(this.form)'];?>"/>
%
<br>
<span class="Text2">Board : </span><input type="radio" name="board_type_2" value="State" required title="State" <?php if($e['board_type_2']=="State")echo "checked";?> /> 
		<span class="Text2" title="State">State</span> 
									<input type="radio" name="board_type_2" value="CBSE" required title="CBSE" <?php if($e['board_type_2']=="CBSE")echo "checked";?> /> 
		<span class="Text2"title="CBSE">CBSE</span>
									<input type="radio" name="board_type_2" value="ICSE" required title="ICSE" <?php if($e['board_type_2']=="ICSE")echo "checked";?> /> 
		<span class="Text2"title="ICSE">ICSE</span>
									<input type="radio" name="board_type_2" value="Other" required title="Other" <?php if($e['board_type_2']=="Other")echo "checked";?> /> 
		<span class="Text2"title="Other">Other</span><br>

<br>
<br>

<!-- GATE --> 

<input type="text" placeholder="GATE Roll No" title="Enter GATE Roll No." name="gate_roll" required class="cap" size="20"  value="<?php echo $e['gate_roll'];?>"/>
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="gate_mo" id="gate_mo" size="14" required  value="<?php echo $e['gate_marks_obtained'];?>"/> 
<span class="Text">/ 
<input type="text" placeholder="Total Marks" name="gate_to" id="gate_to" size="14" required title="Enter Total Marks"  value="<?php echo $e['gate_total_marks'];?>"/>
=

<input type="text" placeholder="Percentage" name="gate_per" id="gate_per" size="14" required title="Enter Percentage" onFocus="PercentGate(this.form)"  value="<?php echo $e['PercentGate(this.form)'];?>"/>
%
<br>
<br>
<input type="text" placeholder="GATE Rank" title="Enter Rank" name="gate_rank" id="gate_rank" size="14" value="<?php echo $e['gate_rank'];?>"/> 

<br>
<br>


<!-- KCET -->
KCET 
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="cet_mo" id="cet_mo" size="14" value="<?php echo $e['k_cet_marks'];?>"/> 
<input type="text" placeholder="Rank" title="Enter Rank" name="cet_rank" id="cet_rank" size="14" value="<?php echo $e['k_cet_rank'];?>"/> 
<br>
<br>


<!-- JEE -->
JEE 
<input type="text" placeholder="Marks Obtained" title="Enter Marks Obtained" name="jee_mo" id="jee_mo" size="14" value="<?php echo $e['jee_marks'];?>"/> 
<input type="text" placeholder="Rank" title="Enter Rank" name="jee_rank" id="jee_rank" size="14" value="<?php echo $e['jee_rank'];?>"/> 
<br>
<br>




<input type="hidden" name="id" value="<?php echo $e['id'];?>">
<input type="submit" value="SAVE" onClick="return confirm('Are You Sure..?')" /> 

</span>
</form>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<br>
<br>

</div>
<br>
<br>
<br>

<?php } 
if($_GET['sankalp'] == sha1('changePassword'))
{
	
?>
<div id="content">
<br>
<span class="subHead">CHANGE ADMIN ACCOUNT PASSWORD</span>
<br>
<hr />
<br>
<form method="post" action="changePassword.php?sankalp=<?php echo sha1('sankalp').sha1('vegan').sha1('forever');?>">
<input type="password" placeholder="Current Password" title="Enter Current Password" size="40" required name="p1" />
<br>
<br>
<input type="password" placeholder="New Password" title="Enter New Password" size="40" required name="p2" />
<br>
<br>
<input type="password" placeholder="Retype New Password" title="Retype Password" size="40" required name="p3" />
<br>
<br>
<input type="submit" value="Change Password" />
</form>
<br>
<br>

</div>
<br>
<br>
<br>

<?php }
 
?>
<br>
<br>

<br>
<?php require("footer.php");?>
</body>
</html>

