<?php
		require_once ("config/connection.php");
		require_once ("config/session_dec.php");
		$suc_msg='';
		$msg='';
		$username = '';				
		$userses = $_SESSION['mainuser'];
		/*Update Card Information*/
		if(isset($_POST['btncard'])){
			$nquery = "update users set cardtype='".$_POST['cardtype']."',cardnum='".$_POST['cardnum']."' where id='".$_SESSION['mainuser']."'";
			$nrows = mysql_query($nquery) or die(mysql_error());
			$suc_msg = 'Your card information has been successfully updated.';
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
<?php include_once('carddetail_content.inc.php');?>
<!--Header section ends-->

<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->
</div>
</body>
</html>