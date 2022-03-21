<div id="content">
	<div class="content_top">
	 <div class="gallerybann">
		<a href="newlisting.php" class="listinglink" id="newlisting">"Your gallery isn't listed? List your gallery here"</a>
		<?php
		if(!isset($_SESSION['mainuser']))
		{
		?>
		<a href="register.php" class=" newsignup listinglink">Create Account to sell your arts</a>		
		<?php
		}
		?>
	 </div>
	  <span class="uperpath">
<a href="index.php" class="menudir">Home</a> &#187;
<a href="artist.php" class="menudir">Artists</a> 
</span>
	<div class="tab" id="tabs">
	<ul id="options">
	<li id="seart"><a  href="artist.php?view=country">Artists by Country </a></li>
	<li id="seawork"><a  href="artist.php?view=artist">Artists from A to Z</a></li>	
	</ul>
	</div>
	  <div id="empty" class="portBox">        
			<p><div >
	<h2>Create Account / Login</h2>
	<div class="row-layout">
        <div class="fourcol">
            <div class="so-module">
                <h3>Want to create an account?</h3>
                <div id="so-sign-up-widget">
    <form id="so-sign-up-form-modal">
        <div class="bd">
            <p>In order to buy or sell art you must first create an account.</p>
        </div>
        <div class="ft align-center">
            <input class="btn btn-inverse" value="Create Account" onclick="Saatchi.Signup.selectAccountType()" type="button">
            <br><br>
            or
            <br><br>
            <a href="javascript:void(0);" onclick="Saatchi.Signup.facebookConnect()"><img src="/media/images/connect-with-facebook.png" alt="Connect with Facebook"></a>
        </div>
    </form>
</div>
            </div>
        </div>

        <div class="fivecol last">
            <div class="so-module">
                <h3>Already have an account?</h3>
                
<form action="/accounts/sign-in" method="post" id="so-signin-form">
    <fieldset class="auth">
        <legend></legend>
        <label for="so-signin-email"><span>Email or Username                :</span> <input name="email" id="so-signin-email" value="" size="24" type="text"> </label>
        <label for="so-signin-password"><span>Password                :</span> <input name="password" id="so-signin-password" value="" size="24" type="password"> </label>
    </fieldset>
    <fieldset class="submit">
        <legend>Login to continue</legend>
        <label for="so-signin-remember"><input name="remember" value="0" type="hidden"><input name="remember" id="so-signin-remember" value="1" type="checkbox"> Remember me</label>
        <input name="url" value="" id="url" type="hidden">
        <input id="so-signin-submit" class="btn btn-inverse" name="signin" value="Login" type="submit">

       
        <div class="clearfix"></div>

        <div class="forgot">
            <a class="so-forgot-password btn btn-link" href="/accounts/reset-password">Forgot your password?</a>
        </div>

        <em class="so-form-loader"></em>
    </fieldset>
</form>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>
	
</div></p>
        
        </div>
	

	 <div class="all_main">
	 <div class="all_left">
	 <h3 class="all_h3">Listed artists</h3>
	 <p class="all_leftp">Browse Art Work by artist.</p>
	  <p class="listedp">Where this symbol 
	<span class="dollarsign"> $</span> is listed next to an artist's name, this means the artist has artwork(s) available for sale.</p>
	   </div>
	 
	 <div class="artist_right">
	 <div class="artist_list">
	 <form action="" method="get">
	
	 <?php
	    $tot=0;
		$arquery="select count(*) as tot from users where user_type='artist' ";
		$arrows=mysql_query($arquery) or die(mysql_error());
		$arnum = mysql_num_rows($arrows);
		?>
		 <select name="artcountry" id="artcountry" class="art_work_right_list">
	<option value="All" <?php if(isset($_GET['country'])){if('All'==$_GET['country']){echo 'selected';}}?>>
	All(<?php echo $arnum;?>)</option>
	   <?php
	    $tot=0;
		$query="select id,country from choices where country!='' order by country";
		$rows=mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($rows);
	    		if($num > 0)
		{
		while($row=mysql_fetch_assoc($rows))
		{	
			$cquery="select count(*) as tot from users where user_type='artist' and country='".mysql_real_escape_string($row['country'])."'";
			$crows=mysql_query($cquery) or die(mysql_error());
			echo $cnum = mysql_num_rows($crows);
			if($crow=mysql_fetch_assoc($crows))
			  {
				$tot = $crow['tot'];	
			}				
		?>
	
	<option value="<?php echo $row['country'];?>" <?php if(isset($_GET['country'])){if($row['country']==$_GET['country']){echo 'selected';}}?>>
	<?php echo $row['country'];?>(<?php echo $tot;?>)</option>
	<?php
	}
		}
	 ?>
	 </select>
	
	 </form>
	 </div>
	
	 
	 <div class="pagication">
	 <span class="pagication_span">
	  <ul id="alpha">
	   <li class="selalpha <?php if(isset($_GET['artist'])){if($_GET['artist']=='all'){echo 'activealp';}}else{echo 'activealp';}?>"><a href="javascript:void(0)" name="alphabet" for="all"  class=" <?php if(isset($_GET['artist'])){if($_GET['artist']=='all'){echo 'active';}}?>">All</a> </li>
	
	 <?php
	 $alphas = range('A', 'Z');
	foreach($alphas as $value){

	?>
	 <li class="selalpha <?php if(isset($_GET['artist'])){if($_GET['artist']==$value){echo 'activealp';}}?>"><a href="javascript:void(0)" name="alphabet" for="<?php echo $value;?>"  class=" <?php if(isset($_GET['artist'])){if($_GET['artist']==$value){echo 'active';}}?>"><?php echo $value;?></a> </li>
	
	<?php
}
?>
</ul>
 <ul id="alphaart">
 <li class=" selalpha <?php if(isset($_GET['artist'])){if($_GET['artist']=='all'){echo 'activealp';}}else{echo 'activealp';}?>"><a href="javascript:void(0)" name="alphabetart" for="all"  class=" <?php if(isset($_GET['artist'])){if($_GET['artist']=='all'){echo 'active';}}?>">All</a> </li>
		 <?php
	 $alphas = range('A', 'Z');
	foreach($alphas as $value){

	?>
	 <li class="selalpha <?php if(isset($_GET['artist'])){if($_GET['artist']==$value){echo 'activealp';}}?>"><a href="javascript:void(0)" name="alphabetart" for="<?php echo $value;?>"  class="<?php if(isset($_GET['artist'])){if($_GET['artist']==$value){echo 'active';}}?>"><?php echo $value;?></a> </li>
	
	<?php
}
?>
</ul>
 <ul id="alphaother">
 <li class="selalpha"><a href="javascript:void(0)" name="alphabetother" for="all"  class=" <?php if(isset($_GET['artist'])){if($_GET['artist']=='all'){echo 'active';}}?>">All</a> </li>
		 <?php
	 $alphas = range('A', 'Z');
	foreach($alphas as $value){

	?>
	 <li class="selalpha"><a href="javascript:void(0)" name="alphabetother" for="<?php echo $value;?>"  class=" <?php if(isset($_GET['artist'])){if($_GET['artist']==$value){echo 'active';}}?>"><?php echo $value;?></a> </li>
	
	<?php
}
?>
</ul>
	
	 </span>
	 </div>
	  <!-- Pagination DIV for Demo 1 -->
<div id="gallerypaginate" class="paginationstyle">
<a href="#" rel="previous">Prev</a> <span class="flatview"></span>
 <a href="#" rel="next">Next</a>
</div>
	
	 <p class="displayedp">Displayed alphabetically by last name</p>
	 
	 <div class="artist_right_main">
	 <?php
		 $subquery='';
		$infoquery="select * from users where user_type='artist'";
		if(isset($_GET['view']))
		{ 	/*Search By counrty*/
			if($_GET['view']=='country')
			{	$infoquery="select * from users where user_type='artist'";
				if(isset($_GET['country']))
				{
					if($_GET['country']!='All')
					{
					$subquery.=" and country='".mysql_real_escape_string($_GET['country'])."'";
					}
				}
				if(isset($_GET['artist']))
				{ 
				if($_GET['artist']!='all')
				{		
				
				 $subquery.=" and lname like '".$_GET['artist']."%'";
				 }
				}
				$infoquery=$infoquery.$subquery;
			}
				/*Search By artwork*/
			if($_GET['view']=='artist')
			{	
				$infoquery="select * from users where user_type='artist'";
				
				if(isset($_GET['artist']))
				{ 
				if($_GET['artist']!='all')
				{				
				 $subquery.=" and lname like '".$_GET['artist']."%'";
				 }
				}
				$infoquery=$infoquery.$subquery;
			}
			
			
		}
		 $list=0;
		$inforows=mysql_query($infoquery) or die(mysql_error());
		$infonum = mysql_num_rows($inforows);
		if($infonum > 0)
		{
		while($inforow=mysql_fetch_assoc($inforows))
			  {
				$username = $inforow['id'];
				$firstname = $inforow['fname'];
				$pic = $inforow['pic'];
				$lastname  = $inforow['lname'];
				$artistname=$lastname.','.$firstname;
				$couquery="select count(*) as list from arts where username='$username' and ((NOW()>=start_date and NOW()<=(start_date + INTERVAL duration day) and type='Online Auction') or type='Buy now sale') and payment_status='0' order by id DESC";
				$courows=mysql_query($couquery) or die(mysql_error());
				$counum = mysql_num_rows($courows);
				if($counum > 0)
				{
				if($courow=mysql_fetch_assoc($courows))
					  {
					 $list=$courow['list'];
					  }
				}
			  
	 ?>
	 <div class="artist_right_left artistblock">
	 <span class="artist_right_left_span">
		 <a href="sellerarts.php?seller=<?php echo $username;?>">
		 <img class="icon" src="<?php echo 'uploaded_files/users/'.$pic;?>" />
		 </a>
	 </span>
	 <h2 class="artist_right_left_h2">
	 <a href="sellerarts.php?seller=<?php echo $username;?>"><?php echo $artistname;?></a>	 
	 </h2>
		<?php
		
		if($list>0)
			{
			?>
		<span class="listingav">
		<span class="dollarsign">$</span> 
		<?php echo $list;
		if($list>1)
		{
		echo ' listings available';
		}
		else
		{
		echo ' listing available';
		}
		?></span>
		<?php
		}
		
		?>
	 
	</div>
	 <?php
	 }
		}
		?>
	
	 </div>
	 
 </div>

<!-- Initialize Demo 1 -->
<script type="text/javascript">

var gallery=new virtualpaginate({
	piececlass: "artistblock", //class of container for each piece of content
	piececontainer: 'div', //container element type (ie: "div", "p" etc)
	pieces_per_page: 32, //Pieces of content to show per page (1=1 piece, 2=2 pieces etc)
	defaultpage: 0, //Default page selected (0=1st page, 1=2nd page etc). Persistence if enabled overrides this setting.
	wraparound: false,
	persist: false //Remember last viewed page and recall it when user returns within a browser session?
})

gallery.buildpagination(["gallerypaginate", "gallerypaginate2"])

</script>
	 </div>
	</div>
	<div class="clear"></div>
	</div>
	