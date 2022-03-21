<?php
require_once ("config/connection.php");
$suc_msg='';
$msg='';
$fname='';
$lname='';
$email='';
$cemail='';
$email='';
$cpass='';
$phone='';
$company='';
if(isset($_POST['reg']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cemail=$_POST['cemail'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$phone=$_POST['phone'];
$company=$_POST['company'];
$query="select * from members where fname = '".$_POST['fname']."'";
$rows=mysql_query($query) or die(mysql_error());
$num = mysql_num_rows($rows);
$equery="select * from members where email = '".$_POST['email']."'";
$erows=mysql_query($equery) or die(mysql_error());
$enum = mysql_num_rows($erows);
if($num > 0)
{
$msg="Username already exists.";
}
else if($enum > 0)
{
$msg="Email-ID already exists.";
}
else if($email!=$cemail)
{
$msg="The email and confirmation email do not match";
}
else if($pass!=$cpass)
{
$msg="The password and confirmation password do not match";
}
else
{

$query="insert into members(fname,lname,email,password,phone,company)values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['pass']."','".$_POST['phone']."','".$_POST['company']."')";
mysql_query($query) ;
$suc_msg='Successfully Registered.';
$fname='';
$lname='';
$email='';
$cemail='';
$email='';
$cpass='';
$phone='';
$company='';
}
}
?>
<!--Head section starts-->
<?php include_once('head.php');?>
<!--Head section ends-->
<body>
<div id="wrapper">
<!--Header section starts-->
<?php include_once('header.php');?>
<!--Header section ends-->

<!--Header section starts-->
<?php include_once('index_content.inc.php');?>
<!--Header section ends-->

<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->
</div>
</body>
</html>