<?php
require_once ("config/connection.php");
require_once ("config/session_dec.php");
$suc_msg='';
$msg='';
$username = '';
				$firstname = '';
				$lastname  = '';
				$email  = '';
				$address  = '';
				$altaddress  = '';
				$country  = '';
				$state  = '';
				$city  = '';
				$zip  = '';
				$phone  = '';
				$hear  = '';
				$usertype  = '';
				$pic = '';
				
				
		$userses = $_SESSION['mainuser'];
		$selquery="select * from users   where id='".$userses."'  ";				
		$selrows=mysql_query($selquery) or die(mysql_error());
		$selnum = mysql_num_rows($selrows);
		if($selnum > 0)
		{
		if($selrow=mysql_fetch_assoc($selrows))
			    {				
				$gallname = $selrow['galleryname'];
				$firstname = $selrow['fname'];
				$lastname  = $selrow['lname'];
				$email  = $selrow['email'];
				$address  = $selrow['address'];
				$altaddress  = $selrow['altaddress'];
				$country  = $selrow['country'];
				$state  = $selrow['state'];
				$city  = $selrow['city'];
				$zip  = $selrow['zip'];
				$phone  = $selrow['phone'];				
				$usertype  = $selrow['user_type'];
				$pic = $selrow['pic'];
				$head = $selrow['headpic'];
				$des = $selrow['description'];
				$charity = $selrow['charity'];
				$charitylink = $selrow['charitylink'];
				
				}
		}
 
?>
<!--Head section starts-->

<!--Head section starts-->
<?php include_once('head.php');?>
<!--Head section ends-->
<body>
<div id="wrapper">
<!--Header section starts-->
<?php include_once('header.php');?>
<!--Header section ends-->

<!--Header section starts-->
<?php include_once('accountdetail_content.inc.php');?>
<!--Header section ends-->

<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->
</div>
</body>
</html>