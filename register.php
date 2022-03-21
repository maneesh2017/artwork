<?php
require_once ("config/connection.php");
if(isset($_SESSION['mainuser']))
{
echo "<script language='javascript'>window.location.href='index.php'</script>";
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
<?php include_once('register_content.inc.php');?>
<!--Header section ends-->

<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->
</div>
</body>
</html>