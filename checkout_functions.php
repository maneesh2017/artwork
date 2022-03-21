<?php
// functions.php
function check_txnid($tnxid){
return true;
$valid_txnid = true;
//get result set
$sql = mysql_query("SELECT * FROM `payments` WHERE txnid = '$tnxid'");		
if($row = mysql_fetch_array($sql)) {
$valid_txnid = false;
}
return $valid_txnid;
}
function check_price($price, $id){
$valid_price = false;
//you could use the below to check whether the correct price has been paid for the product
/* 
$sql = mysql_query("SELECT amount FROM `products` WHERE id = '$id'");		
if (mysql_numrows($sql) != 0) {
while ($row = mysql_fetch_array($sql)) {
$num = (float)$row['amount'];
if($num == $price){
$valid_price = true;
}
}
}
return $valid_price;
*/
return true;
}
function updatePayments($data){	
if(is_array($data)){	
$name = $data['firstname'] ." ". $data['lastname']; 			
$sql = mysql_query("INSERT INTO `payments` (txnid,payment_amount, 
payment_status,itemid,pay_through,payer_name,payment_time,currency_code,fname,lname,email,residence,contact_no)VALUES('".$data['txn_id']."','".$data['payment_amount']."',
'".$data['payment_status']."','".$data['order_id']."',
'1','$name','".date("Y-m-d H:i:s")."','".$data['currency_code']."','".$data['firname']."','".$data['glastname']."','".$data['customemail']."','".$data['customcountry']."','".$data['customamt']."')");
$pay_id = mysql_insert_id();
$query=mysql_query("select payment_status from payments
where payment_id='$pay_id'") or die(mysql_error())	;
$row = mysql_fetch_array($query);
if($row['payment_status']=="Completed"){
return $pay_id;
}
}
}
?>