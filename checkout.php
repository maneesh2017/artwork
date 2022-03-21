<?php
	require_once ("config/connection.php");
	include("functions.php");
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>
<!--Head section starts-->
<?php include_once('head.php');?>
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}


</script>


<body><div id="wrapper">

<!--Header section starts-->
<?php include_once('header.php');
	function get_currency($from_Currency, $to_Currency, $amount) {

	$amount = urlencode($amount);
	
	 $from_Currency = urlencode($from_Currency);
	
	 $to_Currency = urlencode($to_Currency);

	$url = "http://www.google.com/finance/converter?a=$amount&from=$from_Currency&to=$to_Currency";

	$ch = curl_init();
	$timeout = 0;
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$rawdata = curl_exec($ch);
	curl_close($ch);
	$data = explode('bld>', $rawdata);
	$data = explode($to_Currency, $data[1]);
	return round($data[0],2);
	}	
?><div id="content">
<!--Header section ends-->

	<div class="inner_pay" >
	 
    <div style="padding-bottom:10px">
	
    	<h1 align="center">Checkout</h1>
    </div>
    	<div style="color:#F00"><?php echo $msg?></div>
    	
 



</div> 
<?php
if(is_array($_SESSION['cart'])){
?>
<div class="inner_pay">
<form class="paypal" action="payments.php" method="post" id="checkForms" target="">    
	
<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
		
    <div id="cusdiv">	
	<input type="hidden" name="usertype" id="usertype" value="Customer"/>
	<span class="register_main_span">
	<label class="register_main_label">First name<span class="star"><span class="star"> *</span></span></label>
	 <input name="fname" class="register_main_text_field" type="text" />
	</span>
	<span class="register_main_span">
	<label class="register_main_label">Last name<span class="star"><span class="star"> *</span></span></label>
	 <input name="lname" class="register_main_text_field" type="text" />
	</span>	
	<span class="register_main_span">
	<label class="register_main_label">
	Email<span class="star"><span class="star"> *</span></span></label>
	 <input name="email" id="email" class="register_main_text_field" type="text" />
	</span>
	<span class="register_main_span">
	<label class="register_main_label">Country of Residence<span class="star"><span class="star"> *</span></span></label>	
	 <select name="country" class="register_main_list">
	 <option value="">Please select</option>
	   <?php
		$query="select id,country from choices where country!='' order by country";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{	 
		?>	
	<option value="<?php echo $row['country'];?>"><?php echo $row['country'];?></option>
	<?php
	}
		}
	 ?>
	 </select>	
	</span>
	<span class="register_main_span">
	<label class="register_main_label">Contact number </label>
	 <input name="amt" id="amt" class="register_main_text_field" />
	</span>	
	</div>		
		</table>
<input type="hidden" name="product_name" value="Artwork">
<input type="hidden" name="product_amount" value="<?php echo $_SESSION['netcart'];?>">
<input type="hidden" name="shipping-amount">
<input type="hidden" name="total-amount">
<input type="hidden" name="order-id"  value="1">
<input type="hidden" name="Product_number" value="" / >
<input type="hidden" name="cmd" value="_xclick" /> 
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="lc" value="UK" />
<input type="hidden" name="currency_code" value="<?php echo $cuscur;?>" />
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
<input type="hidden" name="first_name" value="pran"  />
<input type="hidden" name="last_name" value="Customer's Last Name"  />
<input type="hidden" name="payer_email" value="customer@example.com"  />
<input type="hidden" name="item_number" value="" / >
<input type="hidden" name="payerid" value="<?php echo $_SESSION['mainuser'];?>" / >
<input type="submit"  id="paybtn" class="submitBidButton placeorder pay_div" value="Checkout" onclick="return validateTextBoxes('checkForms')"  />
			</form> 
			</div>
			<?php
			}
			?>
			</div>
		
  	<!--Footer section starts-->
<?php include_once('footer.php');?>
<!--Footer section ends--></div>
</body>
</html>