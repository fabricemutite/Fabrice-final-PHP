
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="file:///D|/Set-up for YouCam/fabrice notes/PHP_Admin_Signup_Search_Receipt_Manytbl-master/Registration BY Kevin Janvier/style.css">
<title>Untitled Document</title>
<script language="javascript">
function check(){
if(document.form1.password.value != document.form1.cpassword.value){
window.alert("Password Entered does not match");
document.form1.password.focus();
return false;
}}
</script>
<style type="text/css">
<!--
.style15 {color: #FFFFFF}
.style16 {font-size: 24px}
.style18 {font-size: 16px}
.style19 {color: #FFFFFF; font-size: 16px; }
-->
</style>
</head>

<body bgcolor="#000033">
<form id="form1" name="form1" method="post" action="" onsubmit="return check()">
  <p><?php echo $report;?>  </p>
  <p>&nbsp;</p>
  <table width="541" border="0" align="center" bordercolor="#000033">
    <tr>
      <td colspan="2" background="../../../Users/hangi/Documents/clovis/slider-shadow.png" bgcolor="#00FF00"><div align="center"><span class="style15"><blink>welcom to your sign up</blink> </span>new member singn from here </div></td>
    </tr>
    <tr>
      <td width="181" background="slider-shadow.png"><span class="style14 style15 style18"><span class="style15">Firstname</span></span></td>
      <td width="363" background="slider-shadow.png"><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td background="slider-shadow.png"><span class="style14 style15 style18"><span class="style15">Lastname</span></span></td>
      <td background="slider-shadow.png"><input name="lname" type="text" id="lname" /></td>
    </tr>
    <tr>
      <td background="slider-shadow.png"><span class="style14 style16 style15"><span class="style18">Gender</span></span></td>
      <td background="slider-shadow.png"><span class="style8">
        <input name="gender" type="radio" value="male" />
        Male 
        <input name="gender" type="radio" value="female" />
      Female</span></td>
    </tr>
    <tr>
      <td background="slider-shadow.png"><span class="style14 style15 style16"><span class="style19">Email</span></span></td>
      <td background="slider-shadow.png"><input name="email" type="text" id="email" /></td>
    </tr>
    <tr>
      <td background="slider-shadow.png"><span class="style14 style15 style16"><span class="style19">Password</span></span></td>
      <td background="slider-shadow.png"><input name="password" type="password" id="password" /></td>
    </tr>
    <tr>
      <td background="slider-shadow.png">&nbsp;</td>
      <td background="slider-shadow.png"><input name="cpassword" type="password" id="cpassword" /></td>
    </tr>
    <tr>
      <td height="97" colspan="2" background="slider-shadow.png"><div align="center">
        <input type="submit" name="Submit" value="Register Now" />
      </div></td>
    </tr>
  </table>
  <br />
</form>
</body>
</html>
