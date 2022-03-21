	<div id="content">
	<div class="content_top">
	<div class="Whats_new_main">
	<h1>WHATS NEW <a href="all.php">view all >></a></h1>
	<div class="whats_images">
	<div class="whats_images">
	<div class="col-1">
	<?php
	$banarray=array();
	$banid=array();			
	$abannquery = "select * from banner  where id='1'";
	$abrows = mysql_query($abannquery) or die(mysql_error());
	$abnum = mysql_num_rows($abrows);
	if($abnum > 0)
	{	
	if($abrow=mysql_fetch_array($abrows))
	{	
	for($ban=1,$bans=0;$ban<=12;$ban++,$bans++)
	{	
	$image = $abrow[$ban];	
	$bannquery = "select * from arts  where id='".$image."'";
	$brows = mysql_query($bannquery) or die(mysql_error());
	$bnum = mysql_num_rows($brows);
	if($bnum > 0)
	{	
	if($brow=mysql_fetch_assoc($brows))
	{
	$banid[$bans] = $brow['id'];
	$image1  = explode(",",$brow['image1']);
	$banarray[$bans] = $image1[0];	
	}
	}
	}
	}
	}	
	?>
	<ul>
	<li class="ban1"><a href="listingdetail.php?id=<?php echo $banid[0];?>"><img src="<?php echo 'uploaded_files/'.$banarray[0];?>" alt="" /></a></li>
	<li class="ban2"><a href="listingdetail.php?id=<?php echo $banid[1];?>"><img src="<?php echo 'uploaded_files/'.$banarray[1];?>" alt="" /></a></li>
	<li class="ban3"><a href="listingdetail.php?id=<?php echo $banid[2];?>"><img src="<?php echo 'uploaded_files/'.$banarray[2];?>" alt="" /></a></li>
	</ul>
	</div>
	<div class="col-2">
	<ul>
	<li class="ban4"><a href="listingdetail.php?id=<?php echo $banid[3];?>"><img src="<?php echo 'uploaded_files/'.$banarray[3];?>" alt="" /></a></li>
	<li class="ban5"><a href="listingdetail.php?id=<?php echo $banid[4];?>"><img src="<?php echo 'uploaded_files/'.$banarray[4];?>" alt="" /></a></li>
	<li class="margin-none ban6"><a href="listingdetail.php?id=<?php echo $banid[5];?>"><img src="<?php echo 'uploaded_files/'.$banarray[5];?>" alt="" /></a></li>
	<li class="ban7"><a href="listingdetail.php?id=<?php echo $banid[6];?>"><img src="<?php echo 'uploaded_files/'.$banarray[6];?>" alt="" /></a></li>
	<li class="ban8"><a href="listingdetail.php?id=<?php echo $banid[7];?>"><img src="<?php echo 'uploaded_files/'.$banarray[7];?>" alt="" /></a></li>
	<li class="margin-none ban9"><a href="listingdetail.php?id=<?php echo $banid[8];?>"><img src="<?php echo 'uploaded_files/'.$banarray[8];?>" alt="" /></a></li>
	<li class="ban10"><a href="listingdetail.php?id=<?php echo $banid[9];?>"><img src="<?php echo 'uploaded_files/'.$banarray[9];?>" alt="" /></a></li>
	</ul>
	</div>
	<div class="col-3">
	<ul>
	<li class="ban11"><a href="listingdetail.php?id=<?php echo $banid[10];?>"><img src="<?php echo 'uploaded_files/'.$banarray[10];?>" alt="" /></a></li>
	<li class="ban12"><a href="listingdetail.php?id=<?php echo $banid[11];?>"><img src="<?php echo 'uploaded_files/'.$banarray[11];?>" alt="" /></a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	<div class="content_rightside">
	<div class="services">
	<ul>
	<li class="Shipping"><a href="#">International Shipping</a></li>
	<li class="Charities"><a href="#">Supporting Charities Worldwide</a></li>
	<li class="Marketplace"><a href="#">#1 Marketplace for Artists, Art Galleries & Art Buyers</a></li>
	<li class="experience"><a href="#">Over 5 years experience in online art industry</a></li>
	<li class="Auctions"><a href="#">Live Online Art Auctions Available</a></li>
	<li class="Offer"><a href="#">Buy Now or Make an Offer Available</a></li>
	</ul>
	</div>
	<div class="facebook_like"><img src="images/facebook_like.png" alt="" /></div>
	</div>
	
	</div>
	<div class="content_bottom">
	<div class="sell">
	<h2>SELL YOUR ART AT ARTWORKONLY.COM</h2>
	<p>Artwork Only.com is a leading online marketplace to sell and buy art.We represent the artist, galleries and the buyer. Our aim is to create one destination for art. Use our online platform to promote and sell your original artworks to art lovers worldwide. In addition to showing art online, we actively engage in events within the art industry and will help any artist with marketing their works. It is free to sign up and start promoting and selling your art for sale.
	<br />
	<a href="#">Apply today to exhibit your art work in our online art gallery >></a></p>
	</div>
	<div class="buy">
	<h2>BUY ART FROM ARTWORKONLY.COM</h2>
	<p>ArtworkOnly.com is a unique online art marketplace offering art for sale from around the world by enthusiastic artist with a passion for art. Our online gallery gives you the ability to search any type of artwork and easily find what your looking for. We continuously work to grow our gallery so stay online and check in with us for new artworks uploaded on a daily basis.Buy paintings, photography, sculptures and any other form of art, buy and have the artist or gallery ship it too you directly. We donate a portion of each sale to charity of the artists choose.
    <br />
	 <a href="#">
	Starting browsing now>>
	 </a>
	 </p>
	</div>
	
	</div>
	<div class="clear"></div>
	</div>
	