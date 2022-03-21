<?php
    $show_popup = 0;
	$cuscur='USD';
	$cusymbol='$';  
  if(!isset($_COOKIE['customcurs'])) {				
	   $show_popup = 1;
  }
  else
  {	
	 $cuscur=$_COOKIE["customcurs"];		
	 if(isset($_COOKIE['cursym'])) {
		 $cusymbol=$_COOKIE["cursym"];
	 }	
  }  
require_once("config/connection.php");
 $url= basename($_SERVER['REQUEST_URI']);
 $pos= strpos($url, ".php");
  if(!$pos) {
   $url = 'index.php';
  }
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$msg='';
$user='';
$pass='';
$artistname='';
if(isset($_SESSION['mainuser'])){
$msg='';
$infoquery="select * from users where id = '".$_SESSION['mainuser']."'";
$inforows=mysql_query($infoquery) or die(mysql_error());
$infonum = mysql_num_rows($inforows);
if($infonum > 0){
if($inforow=mysql_fetch_assoc($inforows)) {
		$firstname = $inforow['fname'];		
		$lastname  = $inforow['lname'];
		$artistname=$lastname.','.$firstname;
		$loginname=$firstname.' '.$lastname;
	  }
}
 }
if(isset($_COOKIE['trans'])) {
$user=$_COOKIE['trans']['username']; 
$pass=$_COOKIE['trans']['password']; 
}
if(isset($_POST['login'])){
$msg='';
$query="select * from users where email = '".$_POST['email']."' and password = '".$_POST['pass']."'";
$rows=mysql_query($query) or die(mysql_error());
$num = mysql_num_rows($rows);
if($num > 0){
if($row=mysql_fetch_assoc($rows))
	  {
		 $_SESSION['mainuser'] = $row['id'];					
		 $_SESSION['usertype'] = $row['user_type'];
		 //$_SESSION['country'] = $row['country'];
		 $_SESSION['useremail'] = $_POST['email'];
		$logfirstname = $row['fname'];		
		$loglastname  = $row['lname'];
		$logartistname =$logfirstname.' '.$loglastname;
		 $_SESSION['logname'] = $logartistname;
		if(isset($_POST['remem']))
		{
		$check = $_POST['remem']; 
		$time = time();
		setcookie("trans[username]", $_POST['email'], $time + 3600); // Sets the cookie username
		setcookie("trans[password]", $_POST['pass'], $time + 3600); // Sets the cookie password
		}				
        echo "<script language='javascript'>window.location.href='".$url."'</script>";
      }	 
}
else
{
$fbquery="select * from users where email = '".$_POST['email']."' and password = ''";$fbrows=mysql_query($fbquery) or die(mysql_error());
$fbnum = mysql_num_rows($fbrows);if($fbnum > 0){
$msg ="<span class='errs'>Please login via facebook. You currently do not have a password. You can set a password via My Account -> Account Details.</span>";
}
else{
$msg ="<span class='errs'>Invalid Email-Id or password.</span>";}
}
}
?>
 
<div id="header">
	<div class="header_top">
	<div class="top_links">
	<ul>
	<li><a href="index.php">Home</a></li>	
	<?php	
	if(isset($_SESSION['mainuser']))
	{	
	?>	
	<li>|</li>	
	<li><a href="mysummary.php">My Account</a></li>
	<li>|</li>
	<li><a href="blog.php">Blog</a></li>
	<li>|</li>
	<li><a href="watchlist.php">My wishlist</a></li>	
	
	
	<?php
	}
	?>
	<li>|</li>
	<li><a href="shoppingcart.php">My Cart</a></li>
	<li>|</li>
	<li><a href="#" onclick="javascript:checkouthead()">Checkout</a></li>
	<li>|</li>
	<li><a href="#">Currency : <?php echo $cuscur;?>   </a>
	<ul>	
			<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('USD','$');">USD ($)</a>
			</li>
			<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('EUR','&euro;');">EUR (&euro;)</a>
			</li>
				<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('JPY','&yen;');">JPY (&yen;)</a>
			</li>
				<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('GBP','&pound;');">GBP (&pound;)</a>
			</li>
				<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('AUD','$');">AUD ($)</a>
			</li>
				<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('CAD','$');">CAD ($)</a>
			</li>
			<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('HKD','$');">HKD  ($)</a>
			</li>
			<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('NZD','$');">NZD ($)</a>
			</li>
			<li>
                   <a href="javascript:void(0);" onClick="chgcurrency('CNY','&#165;');">CNY (&#165;)</a>
			</li>
			<li>
            <a href="javascript:void(0);" onClick="chgcurrency('INR','&#8377;');"> INR (&#8377;)</a>
			</li>
				<li>
       <a href="javascript:void(0);" onClick="chgcurrency('ILS','&#8362;');">ILS (&#8362;)</a>
			</li>
			<li>
       <a href="javascript:void(0);" onClick="chgcurrency('MXN','$');"> MXN ($)</a>
			</li></ul>
	</li>
	<li>|</li>
	<li>
	<a href="javascript:void(0)" class="sharelink" id="sharelink">Share</a>
	<ul>
	<li>
	<div class="subopt">
		<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528b56333da15bc1"></script>
<!-- AddThis Button END -->
	</div>
	</li>
	</ul>
	</li>
		<?php
	if(isset($_SESSION['mainuser']))
	{
	?>
	<li>|</li>
	<li> <a href="javascript:void(0)" class="logout" id="logout" title="" name="logout">Logout</a></li>

		<?php
		}
	if(!isset($_SESSION['mainuser']))
	{
	?>
	<li>|</li>
	<li>
	<a onclick="" href="register.php" class="button">Sell Your Artwork Here</a>
	</li>
	<li>|</li>
	<li>
	<a onclick="" href="registercus.php" class="button">Become A Customer</a>
	</li>
	<?php
	}
	?>
	
	</ul>
	
	</div>
	<a href="index.php" class="logo"><img src="images/logo.png" alt="" /></a>
	<div class="header_right">
	
	<div class="login_form" id="loginform">
	<?php	
	if(isset($_SESSION['mainuser']))
	{
	if($_SESSION['usertype']!='Customer')
	{
	?>
	<form action="newlisting.php" method="post" class="newlist" >
	<input type="submit" class="buttcreate" name="create" value="Create New Listing"/>
	</form>
	
	<?php
	}
	}
		if(!isset($_SESSION['mainuser']))
	{
	?>
	<span><?php echo $msg;?></span>
	 <form method="post" id="signForms">
	 <span class="login_cntrols">
	<input name="email" id="user" type="text" class="login_input" value="<?php echo $user;?>" placeholder="Email-Id"/>
	<input name="pass"  type="password" class="login_input" value="<?php echo $pass;?>" placeholder="Password"/>
	
	<input name="login" value="" class="login_btn" type="submit" onclick="return validateTextBoxes('signForms');"  ></span>
		<span class="login_btns">
	<p> <input name="remem" class="check_box" type="checkbox" value="remem">Keep me logged in</p>
	<img border="0" src="images/facebook.png" onClick="fblogin();" width="130" height="28" style="cursor:pointer" />
<!--	<p><a href="forgotpassword.php" class="check_boxa">Forgot your password?</a> </span>
	</p>-->  
	</span>
	
	
	<div id="fb-root" style="float:left; width:1px;"></div><script>window.fbAsyncInit = function() 
	{	
	FB.init({	 
	appId: '438845969559475', 
	cookie: true,   
	xfbml: true,  
	oauth: true  
	});   
	};
	(function()
	{
	var e = document.createElement('script'); 
	e.async = true;   
	e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';    document.getElementById('fb-root').appendChild(e);}());
	function fblogin()
	{
	FB.login(function(response){	
	if (response.authResponse) {		 
	window.location='validatefb.php';	
	}},{
	scope: 'publish_stream'
	});
	}
	</script>	

	<?php
	}
	?>
	</div>
	
	</form>
	
	<div class="social_media">
	<h2>Follow us on :</h2>
	<span><a href="#" class="facebook"></a>
	<a href="#" class="twitter"></a>
	<a href="#" class="youtube"></a>
	<a href="#" class="linked"></a>
	<a href="#" class="tum"></a>
	<a href="#" class="pin"></a></span>
	<span>
	</span>
	</div>
	</div>
	<div class="clear"></div>
	</div>
	
	<div class="nav">
	<div class="nav_main">
	<ul>
	<li><a href="#">Popular</a></li>
	<li><a href="all.php">All</a></li>
	<li><a onclick="javascript:void(0);">Subject</a>
	<ul class="inner">
	<?php
		$query="select id,subject from choices where subject!='' order by subject";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{
	    $id= $row['id'];
		?>
	 <li>	
	<a href="all.php?submitsearch=search&subject_id[]=<?php echo $row['id'];?>">
	<?php echo $row['subject'];?></a>
	</li>
	<?php
	}
		}
	 ?>
	</ul>
	</li>
	<li><a onclick="javascript:void(0);">Style</a>
	<ul class="inner">
	<?php
		$query="select id,style from choices where style!='' order by style";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{
	    $id= $row['id'];
		?>
	 <li>	
	<a href="all.php?submitsearch=search&style_id[]=<?php echo $row['id'];?>">
	<?php echo $row['style'];?></a>
	</li>
	<?php
	}
		}
	 ?>
	</ul>
	</li>
	<li><a onclick="javascript:void(0);">Medium</a>
	<ul class="inner">
	<?php
		$query="select id,medium from choices where medium!='' order by medium";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{
	    $id= $row['id'];
		?>
	 <li>	
	<a href="all.php?submitsearch=search&medium_id[]=<?php echo $row['id'];?>">
	<?php echo $row['medium'];?></a>
	</li>
	<?php
	}
		}
	 ?>
	</ul>
	</li>
	<li><a onclick="javascript:void(0);">Size</a>
	<ul class="inner">
	<?php
		$query="select id,artsize from choices where artsize!='' order by artsize";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{
	    $id= $row['id'];
		?>
	 <li>	
	<a href="all.php?submitsearch=search&size_id[]=<?php echo $row['id'];?>">
	<?php echo $row['artsize'];?></a>
	</li>
	<?php
	}
		}
	 ?>
	</ul>
	</li>
	<li><a onclick="javascript:void(0);">Colour</a>
	<ul class="inner">
	<?php
		$query="select id,color from choices where color!='' order by color";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{
	    $id= $row['id'];
		?>
	 <li>	
	<a href="all.php?submitsearch=search&color_id[]=<?php echo $row['id'];?>">
	<?php echo $row['color'];?></a>
	</li>
	<?php
	}
		}
	 ?>
	</ul>
	</li>
	<li><a  onclick="javascript:void(0);">Price</a>
	<ul class="inner">
	<?php
		$query="select id,price from choices where price!='' order by id";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{
	    $id= $row['id'];
		?>
	 <li>	
	<a href="all.php?submitsearch=search&price_id[]=<?php echo $row['id'];?>">
	<?php echo $row['price'];?></a>
	</li>
	<?php
	}
		}
	 ?>
	</ul>
	</li>
	
	<li><a href="artist.php" class="Artist">Artist</a></li>
	<li>
	<a href="gallery.php" id="newlistings" class="Gallerynav">Gallery</a>
	</li>	
	</ul>
	
	<form action="all.php" method="get" class="search_bar">
	<input name="searchtext" type="text" placeholder="Search..." />
	<input name="searchdata" type="button" />
	</form>
	
	</div>
	<div class="clear"></div>
	</div>
	</div>
	