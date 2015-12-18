
<?php
$db = mysql_connect("localhost", "root", "");
mysql_select_db("sign",$db);

if(isset($_POST['Submit'])){
$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['gender'];
$e = $_POST['email'];
$f = $_POST['password'];
$g = date("Y-m-d");

$sql = "insert into exam_tb(id,fname,,lname,gender,email,password) VALUES('$id','$fname',''$lname','$gender','$email','$password',)";

$result = mysql_query($sql);
if($result){

echo "Successfully inserted";
}else{
echo"error";
}
?>
