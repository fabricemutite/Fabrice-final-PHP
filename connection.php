<?php

include_once 'dbconnect.php';

if(isset($_POST['submit']))
{
$surname = mysql_real_escape_string($_POST['surname']);
	$first_name = mysql_real_escape_string($_POST['first_name']);
	$other_name = mysql_real_escape_string($_POST['other_name']);
	$father = mysql_real_escape_string($_POST['father']);
	$mother = mysql_real_escape_string($_POST['mother']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$status = mysql_real_escape_string($_POST['status']);
	$place_of_birth = mysql_real_escape_string($_POST['place_of_birth']);
	$day_of_birth = mysql_real_escape_string($_POST['place_of_birth']);
	$month_of_birth= md5(mysql_real_escape_string($_POST['month_of_birth']));
	$year_of_birth = mysql_real_escape_string($_POST['year_of_birth']);
	$telephon= mysql_real_escape_string($_POST['telephon']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$nationality = mysql_real_escape_string($_POST['nationality']);
	$program = mysql_real_escape_string($_POST['program']);
	$cours = mysql_real_escape_string($_POST['cours']);
	
	if(mysql_query("INSERT INTO exam_tb(id,first_name,other_name,father,mother,gender,status,place_of_birth,day_of_birth,month_of_birth,year_of_birth,telephon,email,password,nationality,program,cours,) VALUES('$id','$first_name','$other_name','$father','$mother','$gender','$status','$place_of_birth','$day_of_birth','$year_of_birth','$telephon','$email','$password','$nationality','$program','$cours')"))
	{
		header ("Location:INDEX.php");
    }
	else {
		?> 
         <script>alert('Sorry !!! Check Well your details information well .');</script>
		<?php 
		}
}	
?>
</body>
</html>
