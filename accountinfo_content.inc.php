<div id="content">
	<div class="content_top">
	 <div class="all_main">
	 <div class="all_left ">
	 <h2 class="my_summry_left_h2">Account Details</h2>
	<?php include_once('summarymenu.php');?>
	 </div>	
	<!--content start here-->
	<div id="accright">
	<div class="clear"></div>
	<div class="register">
	<div class="register_main">
	<h3 class="register_main_h3">Account Details</h3>
	<h4 class="register_main_h4">All fields marked * are required.</h4>
	<form action="" method="post" id="cusaccountForms" enctype="multipart/form-data">
	<span class="register_main_span">
	<label class="register_main_label">User type *</label>
	<select name="usertype" class="register_main_list">
	 <option value="Artist" <?php if($usertype=='Customer'){echo 'selected="selected"';}?>>Customer</option>
	 <option value="Artist" <?php if($usertype=='Artist'){echo 'selected="selected"';}?>>Artist</option>
	 <option value="Gallery" <?php if($usertype=='Gallery'){echo 'selected="selected"';}?>>Gallery</option>
	</select>

	</span>
	<span class="register_main_span">
	<label class="register_main_label">First name *</label>
	 <input name="fname" class="register_main_text_field" type="text" value="<?php echo $firstname;?>"/>
	</span>
	<span class="register_main_span">
	<label class="register_main_label">Last name *</label>
	 <input name="lname" class="register_main_text_field" type="text" value="<?php echo $lastname;?>" />
	</span>
	
	<span class="register_main_span">
	<label class="register_main_label">
	Email *</label>
	<?php echo $email;?> 
	</span>
	<span class="register_main_span">
	<label class="register_main_label">
Address Line 1 *</label>
	 <input name="address" class="register_main_text_field" type="text" value="<?php echo $address;?>"  />
	</span>
	<span class="register_main_span">
	<label class="register_main_label">
Address Line 2</label>
	 <input name="comment" class="register_main_text_field" type="text" value="<?php echo $altaddress;?>" />
	</span>
	
	<span class="register_main_span">
	<label class="register_main_label">
Country *</label>
	
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
	
	<option  value="<?php echo $row['country'];?>" <?php if($country==$row['country']){echo 'selected="selected"';}?>  ><?php echo $row['country'];?></option>
	<?php
	}
		}
	 ?>
	 </select>
	
	</span>
	
	<span class="register_main_span">
	<label class="register_main_label">
State *</label>
<input type="text" name="state" class="register_main_text_field" value="<?php echo $state;?>"/>
	</span>
	
	<span class="register_main_span">
	<label class="register_main_label">

City *</label>
	 <input name="city" class="register_main_text_field" type="text" value="<?php echo $city;?>"/>
	</span>
	<span class="register_main_span">
	<label class="register_main_label">

Zip/Postcode *</label>
	 <input name="zip" id="zip" class="register_main_text_field" type="text" value="<?php echo $zip;?>"/>
	</span>
	
	<span class="register_main_span">
	<label class="register_main_label">

Best contact number </label>
	 <input name="amt" id="amt" class="register_main_text_field"  value="<?php echo $phone;?>"/>
	</span>
	
	<input type="hidden" type="text" name="cusupdationacc" value="artist"/>
	
	
	<span class="register_main_span2">
 <input name="resgister" id="register" class="update_btn" type="submit" value="Update" />
	</span>
	</form>
	<form id="passreset" action="" method="post" >	
	<h3 class="register_main_h3">Password Reset</h3>
	<span class="suc_msg" id="sucreset"></span>
	<span class="register_main_span">
	<input type="hidden" name="passreset" value="resr"/>
	<label class="register_main_label">
Password *</label>
	 <input name="pass" id="pass" class="register_main_text_field" type="password" />
	 <h3 class="note_h3">Your password must be 6 to 20 characters.</h3>
	</span>
	<span class="register_main_span">
	<label class="register_main_label">
Confirm Password *</label>
	 <input name="cpass" id="cpass" class="register_main_text_field" type="password" />
	
	</span>
	<span class="register_main_span2">
 <input name="passreset" id="passreset" class="reset_pwd" type="submit" value="Reset Password" />
	</span>
	</form>
	</div>
	
	</div>
	 
	<div class="clear"></div>
	
	</div>
	<!--content close here-->
	</div>
	</div>
	<div class="clear"></div>
	</div>
	