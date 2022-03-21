<?php
require_once("config/connection.php");
$msgs='';
$suc_msg='';
$user='';
$pass='';
  if(isset($_POST['sendinst']))
			{	$length=8;
			  $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '0123456789``-=~!@#$%^&*()_+,./<>?;:[]{}\|';
			  $password = '';
			  $max = strlen($chars) - 1;
			  for ($i=0; $i < $length; $i++)
			$password .= $chars[mt_rand(0, $max)];				
						$adminmail = '';	
			$aquery="select * from adminuser";
			$arows=mysql_query($aquery) or die(mysql_error());
			$anum = mysql_num_rows($arows);
			if($anum > 0)
			{
			if($arow=mysql_fetch_assoc($arows))
				  {
					$adminmail = $arow['email'];					
				  }
			}
			$query="select * from users where email = '".$_POST['email']."'";
			$rows=mysql_query($query) or die(mysql_error());
			$num = mysql_num_rows($rows);
			if($num > 0)
			{
			if($row=mysql_fetch_assoc($rows))
			{
			$user= $row['username'];	  
			$to=$_POST['email']; 	
			$query="update users set password = '".$password."' where email = '".$_POST['email']."'";
			$rows=mysql_query($query) or die(mysql_error());	
			$subject = "Message from artWork - Password Reset Request";	 			
			$message  =	"<img src='http://salentro.com/core/artwork/images/logo.png' alt='Art Work'/><br/><br/><hr/><br/><br/>";
			$message = "Hello ".ucwords($user).",<br/><br/>";
			$message .= '<br/><br/>We received a request to reset your password. Below is a new password which you will be able to use to log into your account to reset your password to your preferred choice.  <br/><br/>'; 
			$message .= '<br/><br/>You will be able to use this new password immediately and it is highly recommended you log in and update your password from the new one to ensure your account is secure.  <br/><br/>'; 
			$message .= '<br/><br/>You will be able to use this new password immediately and it is highly recommended you log in and update your password from the new one to ensure your account is secure.  <br/><br/>'; 
			$message .= '<br/><br/><b>Best Regards:</b><br/>Art Work';
			$header  = 'MIME-Version: 1.0' . "\r\n"; 	
			$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 	
			$header .= "From:".$adminmail."\r\n"; 	
			$retval  =  @mail ($to,$subject,$message,$header); 	
			$suc_msg='A new password has been emailed to you. You will be required to change this upon login.'; 
			$message;
		 }
			}		
			else
			{
				$msgs ="There is no user with the given email";				
			}
					
			}
?>
<html>
<!--Head section starts-->
<?php include_once('head.php');?>
<!--Head section ends-->
<body>
<!--Header section starts-->
<?php include_once('header.php');?>
<!--Header section ends-->

<!--Header section starts-->
<?php include_once('forgotpassword_content.inc.php');?>
<!--Header section ends-->


<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->

</body>
</html>