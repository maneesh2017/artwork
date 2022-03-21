	
<?php
if(isset($_GET['name']))
{
?>
<p class="tooltiptxt">Enter a descriptive title for your listing to increase its chances of being found by prospective bidders.</p>
<?php
}
if(isset($_GET['currency']))
{
?>
<p class="tooltiptxt">Select which base currency you would like your artwork listed in.</p>
<?php
}
if(isset($_GET['sprice']))
{
?>
<p class="tooltiptxt">Enter the amount you would like your "Online auction" to start at.</p>
<?php
}
if(isset($_GET['rprice']))
{
?>
<p class="tooltiptxt">If you would like to place a reserve in your listing, enter it here. If bidding reaches or goes above this amount, your artwork will sell to the winning bidder for this amount or above.</p>
<?php
}
if(isset($_GET['duration']))
{
?>
<p class="tooltiptxt">Enter the length of time you would like your listing to run for.</p>
<?php
}
if(isset($_GET['aname']))
{
?>
<p class="tooltiptxt">Enter the artist’s name </p>
<?php
}
if(isset($_GET['title']))
{
?>
<p class="tooltiptxt">If the artist provided a title for the artwork, enter it here.</p>
<?php
}
if(isset($_GET['size']))
{
?>
<p class="tooltiptxt">Enter the dimensions of the artwork only, excluding any framing if applicable (eg: include the dimensions of the watercolour/canvas/sculpture only). If your artwork does not have any dimensions (eg: it is digital art), please enter "0" in this section.</p>
<?php
}
if(isset($_GET['osize']))
{
?>
<p class="tooltiptxt">Enter the overall dimensions of the entire artwork including its frame if applicable.</p>
<?php
}
if(isset($_GET['subject']))
{
?>
<p class="tooltiptxt">Select the most appropriate “Subject” option for your artwork. If none of these options are appropriate, select “other”.</p>
<?php
}
if(isset($_GET['style']))
{
?>
<p class="tooltiptxt">Select the most appropriate “Style” option for your artwork. If none of these options are appropriate, select “other”.</p>
<?php
}
if(isset($_GET['medium']))
{
?>
<p class="tooltiptxt">Select the most appropriate “Medium” option for your artwork. If none of these options are appropriate, select “other”.</p>
<?php
}
if(isset($_GET['price']))
{
?>
<p class="tooltiptxt">Select the price bracket you expect your artwork to sell for.</p>
<?php
}
if(isset($_GET['color']))
{
?>
<p class="tooltiptxt">Select the most appropriate base colour or predominant colour of your artwork. If your artwork contains a lot of red, select “red” from the options provided; if your watercolour contains a lot of blues and greens, select either “blue” or “green”. If your artwork does not have a predominant colour, or you would not like to select a colour, please select the <img src="images/na.png" width="23" height="23" border="0" /> option.</p>
<?php
}
if(isset($_GET['des']))
{
?>
<p class="tooltiptxt">Enter any details you feel are important to sell your artwork including condition details. In accordance with the artFido Terms of Use, do not enter your contact details (such as phone numbers or email addresses) in this section.</p>
<?php
}
if(isset($_GET['pro']))
{
?>
<p class="tooltiptxt">Enter as many details about the previous history of the artwork that you are aware of. This may include details such as if and when the artwork has been exhibited, if it has previously been sold previously and the details of that sale, etc. In accordance with the artFido Terms of Use, do not enter your contact details (such as phone numbers or email addresses) in this section.</p>
<?php
}
if(isset($_GET['del']))
{
?>
<p class="tooltiptxt">Delivery prices are to be arranged between the seller and the winning bidder at the end of the listing where the reserve (if any) has been met. Unless otherwise agreed, the winning bidder must pay for all delivery costs in addition to the final winning bid price at the end of the listing.</p>
<?php
}
if(isset($_GET['img']))
{
?>
<p class="tooltiptxt">An image can be uploaded in the following file formats: JPEG (.jpg file extension), PNG (.png file extension) and GIF (.gif file extension). BMP (.bmp file extension) and TIFF (.tif file extension) formats are currently not supported by artFido. An image name cannot contain any of the following characters: # % \ / : * ? " < > |</p>
<?php
}
if(isset($_GET['artist']))
{
?>
<p class="tooltiptxt">This is a artist seller</p>
<?php
}
if(isset($_GET['gallery']))
{
?>
<p class="tooltiptxt">This is a gallery seller</p>
<?php
}if(isset($_GET['indiv']))
{
?>
<p class="tooltiptxt">This is an individual seller</p>
<?php
}
if(isset($_GET['sellercurr']))
{
?>
<p class="tooltiptxt">This is the seller's currency. Currency conversion is an estimate based on the current daily rate and should be verified upon payment.</p>
<?php
}
if(isset($_GET['delcost']))
{
?>
<p class="tooltiptxt">Delivery costs are to be paid by the winning bidder in addition to the final sale price. artFido recommends that you contact the seller before the listing ends if you have any questions about the delivery details or costs.
</p>
<?php
}
if(isset($_GET['artistname']))
{
?>
<p class="tooltiptxt">
This is an artist seller
</p>
<?php
}
if(isset($_GET['galleryname']))
{
?>
<p class="tooltiptxt">
This is a gallery seller
</p>
<?php
}
if(isset($_GET['indiname']))
{
?>
<p class="tooltiptxt">
This is an individual seller
</p>
<?php
}
if(isset($_GET['buyprice']))
{
?>
<p class="tooltiptxt">
Enter the set price you are prepared to sell your artwork for. If a bidder accepts this price and selects the "Buy Now" option in your listing, your artwork will sell to them at this price.
</p>
<?php
}
	if(isset($_GET['sizetip']))
	{
	$height=$_GET['aheight'];
	$awidth=$_GET['awidth'];	
	$nhei=$height/2;
	$heidiv=$nhei/10;
	$nethei=$nhei+$heidiv;
	$nwid=$awidth/2;
	$widdiv=$nwid/10;
	$netwid=$nwid+$widdiv;
	?>
	<p class="tooltiptxt">
	<div class="nomargin">
	<span class="man_span nomargin mansize"><img src="images/silhouette-man.png" /></span>
		<div class="estimatedListingSize" >
	<div class="estimatedListingSizeBox" style="width:<?php echo $nethei.'px';?>;height:<?php echo $nethei.'px';?>;" >
		</div>
	</div></div>
	<p class="notep">NOTE: The above image is an estimate of the size of the image/object compared to an average person. Box will only show a max 180cm height x 180cm width.</p>
	
	</p>
	<?php
	}
if(isset($_GET['regi']))
{
?>
<p class="tooltiptxt">
Auction Text
</p>
<?php
}
?>