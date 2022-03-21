<?php
require_once ("config/connection.php");
$suc_msg='';
$msg='';
$user_type = '';
$mainquery = '';
$mainquerywhere='';
$st='Active listings';
if(isset($_GET['submitsearch']) || isset($_GET['searchtext']))
{
$mainquery = "select * from arts a where ";
//$mainquerywhere .= "((NOW()>=start_date  and NOW()<=(start_date + INTERVAL duration day) and type='Online Auction') or type='Buy now sale')";
//status
if(isset($_GET['status_id']))
{
$mainquerywhere='';
$mainquerycho = "select * from choices where id=".$_GET['status_id']['0'];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
 $st=$rowcho['status'];
if($st=='Active listings')
{
//$mainquerywhere .= " NOW()>=(start_date)  and NOW()<=(start_date + INTERVAL duration day)";
$mainquerywhere .= " ((NOW()>=start_date  and NOW()<=(start_date + INTERVAL duration day) and type='Online Auction' ) or type='Buy now sale') and status='0' ";

}
else
{
$mainquerywhere .= " (((NOW()>=(start_date + INTERVAL duration day) or status='1' )and type='Online Auction' ) or (type='Buy now sale' and status='1')) ";

}
$mainquery .= $mainquerywhere;
}
else
{
$mainquerywhere='';
//$mainquerywhere .= " NOW()<=(start_date + INTERVAL duration day)";
$mainquerywhere .= " ((NOW()>=start_date  and NOW()<=(start_date + INTERVAL duration day) and type='Online Auction') or type='Buy now sale')";

$mainquery .= $mainquerywhere;
}
//Country
if(isset($_GET['seller_location']))
{
$mainquerywhere='';
if($_GET['seller_location']!='All')
{
$mainquery .= " and";
$mainquerywhere .= " country='".$_GET['seller_location']."'";
$mainquery .= $mainquerywhere;
}
else
{

}
}
//Subject
if(isset($_GET['subject_id']))
{
$mainquery .= ' and ';
$mainquerywhere =' subject in (';	
for($i=0;$i<count($_GET['subject_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['subject_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$mainquerywhere .= " '".$rowcho['subject']."'";
$i++;
if($i<count($_GET['subject_id']))
{
$mainquerywhere .= " ,";
}
else
{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;
}
if(isset($_GET['style_id']))
{
$mainquery .= " and";
$mainquerywhere ='  style in (';	
for($i=0;$i<count($_GET['style_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['style_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$mainquerywhere .= " '".$rowcho['style']."'";
$i++;
if($i<count($_GET['style_id']))
{
$mainquerywhere .= " ,";
}
else
{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;
}
if(isset($_GET['medium_id']))
{$mainquery .= " and";
$mainquerywhere ='  medium in (';	
for($i=0;$i<count($_GET['medium_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['medium_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$mainquerywhere .= " '".$rowcho['medium']."'";
$i++;
if($i<count($_GET['medium_id']))
{
$mainquerywhere .= " ,";
}
else
{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;
}
/*Size
if(isset($_GET['size_id']))
{
$mainquerywhere =' artsize in(';	
for($i=0;$i<count($_GET['size_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['size_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$mainquerywhere .= " '".$rowcho['artsize']."'";
$i++;
if($i<count($_GET['size_id']))
{
$mainquerywhere .= " ,";
}
else
{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;

echo $mainquery;
$rows=mysql_query($mainquery) or die(mysql_error());
$num = mysql_num_rows($rows);
if($num > 0)
{
while($row=mysql_fetch_assoc($rows))
	  {
	 echo $row['id'].'<br/>';
	  }
}
}
email file
*/
//Color
	if(isset($_GET['color_id']))
	{
	$mainquerywhere='';
	$mainquery .= " and (";
	//$mainquerywhere =' color in(';	
	for($i=0;$i<count($_GET['color_id']);)
	{
	$mainquerycho = "select * from choices where id=".$_GET['color_id'][$i];
	$chorows=mysql_query($mainquerycho) or die(mysql_error());
	$rowcho=mysql_fetch_assoc($chorows);
	$mainquerywhere .= "color like  '%".$rowcho['color']."%'";
	$i++;
	if($i<count($_GET['color_id']))
	{
	$mainquerywhere .= " or ";
	}
	else
	{
	$mainquerywhere .= " )";
	}
	}
	$mainquery.=$mainquerywhere;
	}
//Type
if(isset($_GET['type_id']))
{$mainquery .= " and";
$mainquerywhere =' type in(';	
for($i=0;$i<count($_GET['type_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['type_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$mainquerywhere .= " '".$rowcho['art_type']."'";
$i++;
if($i<count($_GET['type_id']))
{
$mainquerywhere .= " ,";
}
else
{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;

}

if(isset($_GET['searchtext']))
{
$mainquery .= " and";
$mainquerywhere = "( title like '%".$_GET['searchtext']."%' or artist like '%".$_GET['searchtext']."%'  )";
 $mainquery.=$mainquerywhere;	
}
//USer Type
if(isset($_GET['utype_id']))
{$mainquery .= " and";
$mainquerywhere =' user_type in(';	
for($i=0;$i<count($_GET['utype_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['utype_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$mainquerywhere .= " '".$rowcho['user_type']."'";
$i++;
if($i<count($_GET['utype_id']))
{
$mainquerywhere .= " ,";
}
else
{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;

}
/*Price
if(isset($_GET['price_id']))
{$mainquery .= " and";
$mainquerywhere =' (';	
for($i=0;$i<count($_GET['price_id']);)
{
$mainquerycho = "select * from choices where id=".$_GET['price_id'][$i];
$chorows=mysql_query($mainquerycho) or die(mysql_error());
$rowcho=mysql_fetch_assoc($chorows);
$min = $rowcho['price_minrange'];
$max = $rowcho['price_maxrange'];
$mainquerywhere .='(start_price>='.$min;
if($max!=''){
$mainquerywhere .=' and start_price<='.$max.')';	
}
else{
$mainquerywhere .=')';	
}
$i++;
if($i<count($_GET['price_id']))
{
$mainquerywhere .= " or";
}
else{
$mainquerywhere .= " )";
}
}
$mainquery.=$mainquerywhere;
}
*/
}
else{
$mainquery = "select * from arts a where ";
$mainquerywhere='';
//$mainquerywhere .= "NOW()>=start_date  and NOW()<=(start_date + INTERVAL duration day)";
$mainquerywhere .= "((NOW()>=start_date  and NOW()<=(start_date + INTERVAL duration day) and type='Online Auction'  ) or type='Buy now sale') and status='0'";
$mainquery .= $mainquerywhere;
}
if(isset($_GET['sortby'])){
if($_GET['sortby']=='all'){
$mainquerywhere='';
$mainquerywhere .= " order by (start_date + INTERVAL duration day),start_date,start_price,viewed DESC";
$mainquery .= $mainquerywhere;
}
if($_GET['sortby']=='priceLow')	{
	$mainquerywhere='';
	//$mainquerywhere .= " order by start_price ASC";
	$mainquerywhere .= " order by max_price  ASC";
	$mainquery .= $mainquerywhere;
	}
	if($_GET['sortby']=='priceHigh')	{
	$mainquerywhere='';	
	$mainquerywhere .= " order by  max_price  DESC";
	$mainquery .= $mainquerywhere;
	}
	if($_GET['sortby']=='sizeSmall')	{
	$mainquerywhere='';	
	$mainquerywhere .= " order by other_size ASC";
	$mainquery .= $mainquerywhere;
	}
	if($_GET['sortby']=='sizeLarge')	{
	$mainquerywhere='';
	$mainquerywhere .= " order by other_size DESC";
	$mainquery .= $mainquerywhere;
	}
	if($_GET['sortby']=='mostViewed')	{
	$mainquerywhere='';
	$mainquerywhere .= " order by viewed DESC";
	$mainquery .= $mainquerywhere;
	}
$rows=mysql_query($mainquery) or die(mysql_error());
$num = mysql_num_rows($rows);
if($num > 0){
while($row=mysql_fetch_assoc($rows))	  {	  
		//echo $row['id'].'<br/>';
	 }
}
}
else{
$mainquerywhere='';
$mainquerywhere .= " order by id DESC";
$mainquery .= $mainquerywhere;
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
<?php include_once('all_content.inc.php');?>
<!--Header section ends-->

<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends-->
</div>
</body>
</html>