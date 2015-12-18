<?php

connection to the databse
$conn = mysql_connect("localhost", "root", "") or die("Unable to connect to The Server");
mysql_select_db("exam_db", $conn);


if(isset($_POST['send']))
{
	$reponse = mysql_real_escape_string($_POST['reponse']);
	
	
	if(mysql_query("INSERT INTO questio_tb(id,reponse) VALUES('$id','$reponse',)"))
	{
		header ("Location: INDEX.php");
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
