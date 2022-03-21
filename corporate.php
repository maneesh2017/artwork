<?php
require_once ("config/connection.php");
/*DYNAMIC CONTENT*/
$dyquery = mysql_query("select * from dyn_pages where id='3'"); 
$resrow = mysql_fetch_assoc($dyquery);
$content = nl2br($resrow['p_content']);
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
<?php include_once('corporate_content.inc.php');?>
<!--Header section ends-->

<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->
</div>
</body>
</html>