	<!DOCTYPE html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Artwork Only</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<!--Script-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	  <!--script for gallery start-->
	<script type="text/javascript" charset="utf-8">

	function checkouthead(){	
			document.paypalhead.submit();		
	}
			//Store file in session
		function insertuploads(ids,names,len,price,divcontentt,divcontentss,counter,fsize)
		{ 
		if (names=="")
		  {
		  //document.getElementById("txtHint").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttpi=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttpi=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttpi.onreadystatechange=function()
		  {
		  if (xmlhttpi.readyState==4 && xmlhttpi.status==200)
			{
			totimg=xmlhttpi.responseText;
		  // document.getElementById("numcarts").innerHTML=xmlhttpi.responseText;
			}
		  }
		xmlhttpi.open("POST","certifiedupload.php",true);
		xmlhttpi.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttpi.send("upload=d&fsize="+fsize+"&ids="+ids+"&name="+names+"&counter="+counter+"&len="+len+"&price="+price+"&divs="+divcontentt+"&divss="+divcontentss);
		}	
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});
				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
		<!--<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>-->
	<link rel="stylesheet" type="text/css" media="all" href="css/jquery.fancybox.css">
	<!--Validation-->
	<script type="text/javascript" src="js/validation.js"></script>
	<!--Date Time Picker Starts-->
	<!--
	[if IE 7 ]>		 <html class="no-js ie ie7 lte7 lte8 …
	-->
	<!--
	[if IE 8 ]>		 <html class="no-js ie ie8 lte8 lte9"…
	-->
	<!--
	[if IE 9 ]>		 <html class="no-js ie ie9 lte9>" lan…
	-->
	<!--
	[if (gt IE 9)|!(IE)]><!
	-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!--Date Time Picker ends-->
	<!-- File upload Script files -->
	<link type="text/css" href="css/vpb_uploader.css" rel="stylesheet" />
	<!--<script type="text/javascript" src="js/vpb_uploaders.js"></script>-->
	<script type="text/javascript">
	dtt='';
	var filetext='';
	function myprintFunction()
	{
	window.print();
	}
	function watchlist(id)
	{ 
	var s='<?php  if(isset($_SESSION['mainuser'])){echo 'true';}else{echo 'false';} ?>';	
	if(s=='false')
	{
	alert('Please Login to add this art to your wishlist.');	
	return false ;
	}
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	var totimg=xmlhttps.responseText;
	document.getElementById('watchlist'+id).innerHTML=totimg;	
	if(totimg=='Add to wishlist')
	{
		
		$('#watchlist'+id).removeClass( "toolremo" );
		$('#watchlist'+id).removeClass( "toolsa" );
		$('#watchlist'+id).addClass( "toolsa" );
		}
		if(totimg=='Remove from wishlist')
	{
		
		$('#watchlist'+id).removeClass( "toolremo" );
		$('#watchlist'+id).removeClass( "toolsa" );
		$('#watchlist'+id).addClass( "toolremo" );
		}
	}
	}
	xmlhttps.open("GET","certifiedupload.php?watchlist=u&artid="+id,true);
	xmlhttps.send();
	}
	function watchlists(id)
	{ 
	var s='<?php  if(isset($_SESSION['mainuser'])){echo 'true';}else{echo 'false';} ?>';	
	if(s=='false')
	{
	alert('Please Login to add this art to your wishlist.');	
	return false ;
	}
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	var totimg=xmlhttps.responseText;
	if(totimg=='Add to wishlist')
	{
		
		$('#watchlists'+id).removeClass( "toolremo" );
		$('#watchlists'+id).removeClass( "toolsa" );
		$('#watchlists'+id).addClass( "toolsa" );
		}
		if(totimg=='Remove from wishlist')
	{
		
		$('#watchlists'+id).removeClass( "toolremo" );
		$('#watchlists'+id).removeClass( "toolsa" );
		$('#watchlists'+id).addClass( "toolremo" );
		}
	}
	}
	xmlhttps.open("GET","certifiedupload.php?watchlist=u&artid="+id,true);
	xmlhttps.send();
	}
	$(function() {
	$('a#logout').click(function() {
	logoutuser();
	});
	
	//Report Art
	$('a#doglink').click(function() {
	var s='<?php  if(!isset($_SESSION['mainuser'])){echo 'false';}?>';
	if(s=='false')
	{	
	alert('Please Login to report this art.');
	return false ;
	}
	});
	 //New Listing
	$('a#newlisting').click(function() {
	var s='<?php  if(!isset($_SESSION['mainuser'])){echo 'false';}?>';
	if(s=='false')
	{
	alert('Please Login to post a new listing.');	
	return false ;
	}
	else
	{
	var type='<?php  if(isset($_SESSION['usertype'])){echo $_SESSION['usertype'];}?>';	
	if(type=='Customer'){
	alert('Please Login as a Artist/Gallery to post a new listing.');	
	return false ;
	}
	}
	});
	//Seller Question
	$('a#askques').click(function() {
	
	var s='<?php  if(!isset($_SESSION['mainuser'])){echo 'false';}?>';
	if(s=='false')
	{
	//$("#loginview").html('<a href=#loginform>Please Login to like this listing</a>');
	alert('Please Login to ask a question from seller.');
	return false;
	}
	
	});
	$('a.close').click(function() {
	var s='<?php  if(!isset($_SESSION['mainuser'])){echo 'false';}?>';
	if(s=='false')
	{
	$("#loginview").html('<a href=#loginform>Please Login to like this listing</a>');
	return false;
	}
	var ids=$(this).attr('for');		
	var link=$(this).attr('alt');		
	var dataString = new FormData();			
				dataString.append('likeid',ids);
				dataString.append('alt',link);
				$.ajax({
					type:"POST",
					url:"certifiedupload.php",
					data:dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
						$("#outeropt"+ids).html('<div align="center"  style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:blue;"><img class="loading"  src="images/loadings.GIF"  align="absmiddle" title="Upload...."></div>');
						//$('#btncert').attr('disabled','disabled');
						//$('#btncert').addClass( "btncert" );						
					},
					success:function(response) 
					{    
						setTimeout(function() {
							var response_brought = response;						
							if ( response_brought != -1) {
							$("#outeropt"+ids).hide();
							var res=response_brought.split("#");							
							var lik=Number(res[0]);							
							var dislik=Number(res[1]);							
							var tot=lik+dislik;							
							$("#outer"+ids).html('Ratings for this listings ('+tot+')');
							$("#totlike"+ids).html(lik);
							$("#totdislike"+ids).html(dislik);
							} else {
								var fileType_response_brought = response.indexOf('file_type_error');
								if ( fileType_response_brought != -1) {
									var filenamewithoutextension = response.replace('file_type_error&', '').substr(0, response.replace('file_type_error&', '').lastIndexOf('.')) || response.replace('file_type_error&', '');
									var fileID = filenamewithoutextension.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
									$("#uploading_"+fileID).html('<div align="left" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:red;">Invalid File</div>');
									//$("#remove"+fileID).html('<div align="center" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:orange;">Cancelled</div>');
								} else {
									var filesize_response_brought = response.indexOf('file_size_error');
									if ( filesize_response_brought != -1) {
										var filenamewithoutextensions = response.replace('file_size_error&', '').substr(0, response.replace('file_size_error&', '').lastIndexOf('.')) || response.replace('file_size_error&', '');
										var fileID = filenamewithoutextensions.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
										$("#uploading_"+fileID).html('<div align="left" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:red;">Exceeded Size</div>');
										$("#remove"+fileID).html('<div align="center" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:orange;">Cancelled</div>');
									} else {
										var general_response_brought = response.indexOf('general_system_error');
										if ( general_response_brought != -1) {
											//alert('Sorry, a file was not uploaded...');
										}
										else { /* Do nothing */}
									}
								}
							}
							if (file_counter+1 < file.length ) {
								//self.vasPLUS(file,file_counter+1); 
							} 
							else {}
						},4000);
					}
				});
		return false;
	});
	});
	function showdiv()
		{
			   var selected = $("input[type='radio'][name='selection']:checked");			
			   var test =selected.val();			  
			   if(test=='computer')
			   {			   	  
				$("#selopt").val('computer');
				$("#com").show();
				$("#fax").hide();		
				carts('computer');			
			   }
			   if(test=='fax')
			   {			  
			   $("#selopt").val('fax');
			   $("#com").hide();
			   $("#fax").show();
			   carts('fax');	
			   }		
		}
		function showpayment()
		{
		var selected = $("input[type='radio'][name='payment']:checked");			
			   var test =selected.val();				   
			   if(test=='paypal')
			   {			   	  
				$("#payp").slideDown("slow");
				$("#paym").slideUp("slow");			
			   }
			   else
			   {					  
				$("#payp").slideUp("slow");
				$("#paym").slideDown("slow");			
			   }		
		}
		function wrdcount()
		{ var res=1;
			var sprice=$('#sprice').val();		
			if(sprice<=0)
			{
			$("#sprice").css("border-color","red");	
			$("#sprice").nextAll('span.err').remove();
			$("#sprice").after( "<span class=err>Start price must be greater than zero</span>" );			
			res=0;
			}
			else
			{
			$("#sprice").css("border-color","initial");
			$("#sprice").css("background-color","white");	
			$("#sprice").nextAll('span.err').remove();
			}
			var rprice=$('#rprice').val();	
			rprice=parseInt(rprice);
			sprice=parseInt(sprice);
			if(!$("#reserve").is(':checked')){
			 if(rprice<=sprice)
			{
			$("#rprice").css("border-color","red");	
			$("#rprice").nextAll('span.err').remove();
			$("#rprice").after( "<span class=err>Reserve Price must be greater than Start Price</span>" );			
			res=0;
			}
			else
			{
			$("#rprice").css("border-color","initial");
			$("#rprice").css("background-color","white");	
			$("#rprice").nextAll('span.err').remove();
			}
			}
			return res;
		}		
		$(document).ready(function(){ 
		$("input[name$='selection']").click(function() {
			showdiv();
			}); 
		
  /* Gallery view page sub options*/  
   $('.suffer_left').hover(function () { 
    $('.subthumbnail', this).show();
}, function () {   
 $('.subthumbnail', this).hide();
});

		});	
		$(document).ready(function(){
		
		$("#sprice,#rprice,#txtNewBid,#height,#width,#depth,#over1,#over2,#over3,#cost,#outcost").keydown(function(event) {  
		  if (!((event.keyCode == 8) || (event.keyCode == 46) || (event.keyCode >= 35 && event.keyCode <= 40) || (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105)))   
			event.preventDefault();   
		});  
		 $("#datepicker").keydown(function(event) {  
					event.preventDefault();   
		});

		/*Subject Select box*/
		$("select[name$='subject']").change(function() {
			delsel();
			});
			/*Style Select box*/
		$("select[name$='style']").change(function() {
			delsel();
			});
			/*Style Select box*/
		$("select[name$='medium']").change(function() {
			delsel();
			});
				/*Price Select box*/
		$("select[name$='price']").change(function() {
			delsel();
			});
			/*Artwork country Select box*/
		$("select[name$='artwrkcountry']").change(function() {
			var dwith=$("#artwrkcountry").val();
			$("#selcou").html(dwith);
			$("#selcout").html(dwith);
			});
			/*Register user type Select box*/
		$("select[name$='usertype']").change(function() {
			usertypesel();
		
			});
			/*Register user type Select box*/
		$("select[name$='usertype']").change(function() {
			usertypesel();
		
			});
			function usertypesel()
			{
			var dwith=$("#usertype").val();			
			$('#artidiv').hide();
			$('#galldiv').hide();	
			$('#cusdiv').hide();			
			if(dwith=='Artist')
			{			
			$('#artidiv').show();			
			}
			if(dwith=='Gallery')
			{
			$('#galldiv').show();
			}
			if(dwith=='Customer')
			{
			$('#cusdiv').show();
			}
			}
			
			//Delivery select
			usertypesel();
				delsel();
			$("select[name$='delivery_within']").change(function() {
			delsel();
			}); 
			$("select[name$='delivery_outside']").change(function() {
			delsel();
			}); 
			});
			function delsel()
			{
			var dwith=$("#within").val();			
			if(dwith=='Yes')
			{
			 $("#incost").show();		
			}
			else
			{
			 $("#incost").hide();		
			}
			var dout=$("#delivery_outside").val();			
			if(dout=='Yes')
			{
			 $("#outcost").show();		
			}
			else
			{
			 $("#outcost").hide();		
			}
			/*Other Subject*/
			var selsub=$("#selsubject").val();		
			if(selsub=='Other')
			{
			 $("#othersub").show();		
			}
			else
			{
			 $("#othersub").hide();		
			}
			/*Other Style*/
			var selsub=$("#selstyle").val();		
			if(selsub=='Other')
			{
			 $("#otherstyle").show();		
			}
			else
			{
			 $("#otherstyle").hide();		
			}
			/*Other Medium*/
			var selmed=$("#selmedium").val();		
			if(selmed=='Other')
			{
			 $("#othermedium").show();		
			}
			else
			{
			 $("#othermedium").hide();		
			}
			/*Other Price*/
			var selpri=$("#selprice").val();	
		
			if(selpri=='Other')
			{
			 $("#otherprice").show();		
			}
			else
			{
			 $("#otherprice").hide();		
			}
			if($("#othermode").is(':checked')){			
			 $("#otherpay").show();		
			}
			else
			{
			 $("#otherpay").hide();		
			}
			}
			
			// Reserve Auction Checkbox
			function resauction()
			{	
			if($("#reserve").is(':checked')){
				$('#rprice').attr('disabled','disabled');
				$('#rprice').val('0');
				}	
				else{				
				$("#rprice").removeAttr("disabled");				
				}
				}
				// Artist Name Checkbox
			function artistname()
			{	
			if($("#artmine").is(':checked')){				
				var val=$('#artmine').val();				
				var artlast=$('#artist_last').val();				
				$('#artist').val(val);				
				$('#artistlast').val(artlast);				
				}	
				else{		
				$('#artist').val('');
				$('#artistlast').val('');
				$("#artist").removeAttr("disabled");				
				}
				}
				// Paypal Id Text Box show/hide
			function paytext()
			{	
			if($("#paypalch").is(':checked')){				
				$('#paytext').show();
				}	
				else{				
				$("#paytext").hide();				
				}
			}
			//Form Submit
			function artsub()
		{		
				var res=validatelisting('regForm');
				
				if(res)				{
				document.getElementById("regForm").submit();	
		}				
		}	
	function vpb_remove_this_file(id, filename,counts)
	{	
	if(confirm('If you are sure to remove the file: '+filename+' then click on OK otherwise, Cancel it.'))
	{
		$("#vpb_removed_files").append('<input type="hidden" id="'+id+'" value="'+id+'">');
		$("#add_fileID"+id).slideUp();
		unsetses(counts);	
	}
	return false;
	}
	function logoutuser()
	{ 
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	//totimg=xmlhttps.responseText;
	window.location.href=location.href;	
	}
	}
	xmlhttps.open("GET","certifiedupload.php?seslogout=u",true);
	xmlhttps.send();
	}
	function carts(name)
	{ //alert(name);
	if (name=="")
	{ 
	return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttpc=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttpc=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttpc.onreadystatechange=function()
	{
	if (xmlhttpc.readyState==4 && xmlhttpc.status==200)
	{
	//document.getElementById("div1").innerHTML=xmlhttp.responseText;
	}
	}
	xmlhttpc.open("GET","countcart.php?type="+name,true);
	xmlhttpc.send();
	}
	function unsetses(counts)
	{ 
	var name='t';
	if (name=="")
	{  
	return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	totimg=xmlhttps.responseText;
	}
	}
	xmlhttps.open("GET","certifiedupload.php?unses=u&counts="+counts,true);
	xmlhttps.send();
	}	
	$(function() {
	queryString='';
	$(".has-js a.label_check,a.label_style,a.label_med,a.label_size,a.label_color,a.label_type,a.label_utype,a.label_price").click(function() {  
	$(this).toggleClass("c_on");	
	});
		$('.has-js li').click(function(e) {
		e.preventDefault();	
	$(this ).parent().prepend(this);		
		var res= $(this).attr('id');		
		var ress= $('#'+res+' a').hasClass('c_on');
		if(ress==true)
		{
			//$(this ).parent().prepend(this);
		}
		else
		{
			//$(this).insertAfter("#subjectul li:eq(1)");
		}
		});
	});
	$(function() {
	queryString='';
	$(".has-js a.label_status").click(function() { 
	$(this).toggleClass("c_on");	
	var name=$(this).attr('name');
	if(name=='status_1')
	{
	$('a[name=status_2]').removeClass("c_on");	
	}
	else	{
	$('a[name=status_1]').removeClass("c_on");	
	}	
	});
	});
	  $(function() {
	  var subcount = $(".subject ul li").size();
	   var stycount = $(".style ul li").size();
	   var medcount = $(".medium ul li").size();
	   var sizcount = $(".size ul li").size();
	   var pricount = $(".price ul li").size();
	$('.subject ul li')
	.hide()
	.filter(':lt(2)')
	.show();
	if(subcount>2)
	{
	$('.subject ul')
	.append('<li><span>+ More Choices</span><span class="less">- Fewer Choices</span></li>')
	.find('li:last')
	.click(function(){
		$(this)
			.siblings(':gt(1)')
			.toggle()
			.end()
			.find('span')
			.toggle();
	});
	}
	$('.style ul li')
	.hide()
	.filter(':lt(2)')
	.show();
	if(stycount>2)
	{
	$('.style ul')
	.append('<li><span>+ More Choices</span><span class="less">- Fewer Choices</span></li>')
	.find('li:last')
	.click(function(){
		$(this)
			.siblings(':gt(1)')
			.toggle()
			.end()
			.find('span')
			.toggle();
	});
	}
		$('.medium ul li')
	.hide()
	.filter(':lt(2)')
	.show();
	if(medcount>2)
	{
	$('.medium ul')
	.append('<li><span>+ More Choices</span><span class="less">- Fewer Choices</span></li>')
	.find('li:last')
	.click(function(){
		$(this)
			.siblings(':gt(1)')
			.toggle()
			.end()
			.find('span')
			.toggle();
	});
	}
	$('.size ul li')
	.hide()
	.filter(':lt(2)')
	.show();
	if(sizcount>2)
	{
	$('.size ul')
	.append('<li><span>+ More Choices</span><span class="less">- Fewer Choices</span></li>')
	.find('li:last')
	.click(function(){
		$(this)
			.siblings(':gt(1)')
			.toggle()
			.end()
			.find('span')
			.toggle();
	});
	}
	$('.price ul li')
	.hide()
	.filter(':lt(2)')
	.show();
	if(pricount>2)
	{
	$('.price ul')
	.append('<li><span>+ More Choices</span><span class="less">- Fewer Choices</span></li>')
	.find('li:last')
	.click(function(){
		$(this)
			.siblings(':gt(1)')
			.toggle()
			.end()
			.find('span')
			.toggle();
	});
	}
	});
	function getURLParam(){
	var key='subject_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){
	   // if($(this).hasClass("c_on")) {
		 var ctl = '#'+$(this).attr('for');
		 ctl='subject_'+values[i];
		 $('a[name='+ctl+']').addClass('c_on');
	/* $('.has-js li').click(function(e) {
		e.preventDefault();
		$(this).parent().prepend(this);
		});*/
		//$('#link'+ctl).parent().prepend('#link'+ctl);
	});
		//$('#subject_').toggleClass("c_on");
		}
	}
	function getURLstyle(){
	var key='style_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='style_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
	//Medium
	function getURLmedium(){
	var key='medium_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='medium_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
	function getURLsize(){
	var key='size_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='size_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
	function getURLcolor(){
	var key='color_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='color_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
		function getURLtype(){
	var key='type_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='type_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
	//Status
	function getURLstatus(){
	var key='status_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='status_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
		});		
		}
	}
	//country
	function getURLcountry(){
	var key='seller_location';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}			
		var sortBy=values[0];
		$('select.sell option[value="' + sortBy + '"]').prop("selected", true);
	}
	//USer Type
	function getURLutype(){
	var key='utype_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='utype_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
	function getURLprice(){
	var key='price_id[]';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}		
		for(var i=0;i<values.length;i++)
		{
		$.each($('#filterWrapper a'),function(){       
		 var ctl = '#'+$(this).attr('for');
		 ctl='price_'+values[i];		
		 $('a[name='+ctl+']').addClass('c_on');  
	});		
		}
	}
	//Sorting
	function getURLsort(){
	var key='sortby';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}			
		var sortBy=values[0];
		$('select.sortlist option[value="' + sortBy + '"]').prop("selected", true);
	}
	//Sorting
	function getURLartist(){
	var key='view';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);				
			}
			else{
				break;
			}
		}			
		var val=values[0];	
		if(val=='country'||val==undefined)
		{
		$('#artcountry').show();
		$('#alphaother').hide();
		$('#alpha').show();
		$('#alphaart').hide();
		$('#seart').addClass('activeli');		
		}
		if(val=='artist')
		{
		$('#artcountry').hide();
		$('#alpha').hide();
		$('#alphaother').hide();
		$('#alphaart').show();
		$('#seawork').addClass('activeli');
		}
		if(val=='other')
		{
		$('#artcountry').hide();
		$('#alpha').hide();
		$('#alphaart').hide();
		$('#alphaother').show();
		$('#seaother').addClass('activeli');
		}
	}
	//Sorting
	function getURLsearchtext(){
	var key='searchtext';
	var target='';	
		var values = [];
		if(!target){
			target = location.href;
		}
		key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var pattern = key + '=([^&#]+)';
		var o_reg = new RegExp(pattern,'ig');
		var st=true;
		while(true){
			var matches = o_reg.exec(target);
			if(matches && matches[1]){
				values.push(matches[1]);					
			}
			else{
				break;
			}
		}	
		if(values.length>0)
		{
		var val=values[0];	
		return val;
		}
		else
		{
		return '-1';
		}
	}
	function selcolor()
	{
	
	}
	/*Accept Terms and conditions in new listing*/
			function acceptcheck()
				{	
				if($("#accept").is(':checked')){
				$("#accept").nextAll('span.err').remove();	
				return true;
				}	
				else{				
				$("#accept").nextAll('span.err').remove();
				$("#accept").after( "<span class=err>Required field.</span>" );
				return false;				
				}
				}
	function registersubmit(){
				var res = '';
				var dwith=$("#usertype").val();								
				var formData = '';
						
				if(dwith=='Artist')
			{			
			res=validateTextBoxes('artistForms');	
			formData = new FormData($("#artistForms")[0]);			
			}
			if(dwith=='Gallery')
			{
			res=validateTextBoxes('gallForms');	
			formData = new FormData($("#gallForms")[0]);	
			}
			if(dwith=='Customer')
			{
			res=validateTextBoxes('cusForms');
			formData = new FormData($("#cusForms")[0]);				
			}	
			formData.append('artisttype',dwith);			
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				
				if(res)
				{	
				var s=acceptcheck();	
				
				if(s)
				{				
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: formData,
					async: false,
					success: function(data) {	
						if(data==false )
						{ 						
							$("#register").nextAll('span.err').remove();
							$("#register").after( "<span class=err>Email-ID is unavailable.</span>" );
						}		
						else
						{						
							$("#register").nextAll('span.err').remove();
							alert("You have been successfully registered");
							location.reload();						
						}						
						if(data == true) {						
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your message has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 2000);
							});
						}
					}, cache: false,
		contentType: false,
		processData: false
				});
			}
			}
			return false;
		}
	$(document).ready(function()
	{	
	getURLParam();
	getURLstyle();
	getURLmedium();
	getURLsize();
	getURLcolor();
	getURLtype();
	getURLstatus();
	getURLcountry();
	getURLutype();
	getURLprice();
	getURLsort();
	getURLartist();
	paytext();
	selcolor();
	$("#othercol").hide();
	 $("#selcolor").on("change", function(){   
      var count = 0;
    
      for (var i = 0; i < this.options.length; i++)
      {
        var option = this.options[i];
       
        option.selected ? count++ : null;
        if(option.selected)
		{		
		 $("#othercol").show();
		}
		else
		{
		 $("#othercol").hide();
		}
        if (count > 3)
        {
            option.selected = false;
            option.disabled = true;
			$(this).nextAll('span.err').remove();
			$(this).after( "<span class=err>Please select only Three options.</span>" );		
            
        }else{
            option.disabled = false;
           $(this).nextAll('span.err').remove();
        }
      }
    });
	/*Artist signup*/
	$("a[name$='artistsignup']").click(function() {
	$("#optchose").hide();				
	$("#artistreg").show();				
	});
	/*Alphabets click*/
	$("a[name$='alphabet']").click(function() {
	$('#alpha  li a').removeClass('active');
	$(this).addClass('active'); 
	searchcountry();
	});
	/*Artist by country*/
	function searchcountry()
	{
	var ctl ='';				
	var queryParams = 'view=country&';	
	queryParams+='country='+$("#artcountry").val();
	$.each($('#alpha li a'),function(){
		if($(this).hasClass("active")) {
		 ctl = $(this).attr('for');
	// Fill the query param with values
		queryParams+='&artist='+ctl;	
		}
	});
	$('#filterWrapper').attr('action', 'http://localhost/artwork/all.php?s=l' + queryParams);
		//var u='http://localhost/artwork/all.php?' + queryParams;
		var loc=window.location.href.split('?')[0];
		var u=loc+'?' + queryParams;window.open (u,'_self',false)
		return false;
	}
	$("select[name$='artcountry']").change(function() {	
	searchcountry();
			}); 
			$("a[name$='alphabetart']").click(function() {
	$('#alphaart  li a').removeClass('active');
	$(this).addClass('active'); 
	searchartist();
	});
	/*Artist by country*/
	function searchartist()
	{
	var ctl ='';				
	var queryParams = 'view=artist';		
	$.each($('#alphaart li a'),function(){
		if($(this).hasClass("active")) {
		 ctl = $(this).attr('for');
	// Fill the query param with values
		queryParams+='&artist='+ctl;	
		}
	});	
		var loc=window.location.href.split('?')[0];
		var u=loc+'?' + queryParams;window.open (u,'_self',false)
		return false;
	}
	//Listed Artist
	$("a[name$='alphabetother']").click(function() {
	$('#alphaother  li a').removeClass('active');
	$(this).addClass('active'); 
	searchother();
	});
	function searchother()
	{
	var ctl ='';				
	var queryParams = 'view=other';		
	$.each($('#alphaother li a'),function(){
		if($(this).hasClass("active")) {
		 ctl = $(this).attr('for');
	// Fill the query param with values
		queryParams+='&artist='+ctl;	
		}
	});	
		var loc=window.location.href.split('?')[0];
		var u=loc+'?' + queryParams;window.open (u,'_self',false)
		return false;
	}
	$("select[name$='sortlist']").change(function() {
	var queryParams = 'submitsearch=query&';
	var valtxt=getURLsearchtext();
		if(valtxt!='-1')
		{
		queryParams += 'searchtext='+valtxt+'&';
		}
	$.each($('form a.label_check'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');
	// Fill the query param with values
		queryParams+='subject_id[]='+$(ctl).val()+'&';
		}
	});
	$.each($('form a.label_style'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='style_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_med'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='medium_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_size'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='size_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_color'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='color_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_type'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='type_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_status'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='status_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_utype'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='utype_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_price'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='price_id[]='+$(ctl).val()+'&';	
		}
	});
	queryParams+='seller_location='+$("#countrysel").val();
	queryParams+='&sortby='+$("#sortlist").val();
	queryParams+='&seller='+$("#sellertxt").val();
	$('#filterWrapper').attr('action', 'http://localhost/artwork/all.php?s=l' + queryParams);
		//var u='http://localhost/artwork/all.php?' + queryParams;
		var loc=window.location.href.split('?')[0];
		var u=loc+'?' + queryParams;window.open (u,'_self',false)
		return false;
			}); 
	$('#filterWrapper').submit(function(){	
	var queryParams = 'submitsearch=query&';
		var valtxt=getURLsearchtext();		
		if(valtxt!='-1')
		{
		queryParams += 'searchtext='+valtxt+'&';
		}
	//var queryParams = 'submitsearch=query&';
	$.each($('form a.label_check'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');
	// Fill the query param with values
		queryParams+='subject_id[]='+$(ctl).val()+'&';
		}
	});
	$.each($('form a.label_style'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='style_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_med'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='medium_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_size'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='size_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_color'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='color_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_type'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='type_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_status'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='status_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_utype'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='utype_id[]='+$(ctl).val()+'&';	
		}
	});
	$.each($('form a.label_price'),function(){
		if($(this).hasClass("c_on")) {
		 ctl = '#'+$(this).attr('for');		
		queryParams+='price_id[]='+$(ctl).val()+'&';	
		}
	});
	queryParams+='seller_location='+$("#countrysel").val();
	queryParams+='&sortby='+$("#sortlist").val();
	queryParams+='&seller='+$("#sellertxt").val();
	$('#filterWrapper').attr('action', 'http://localhost/artwork/all.php?s=l' + queryParams);
		//var u='http://localhost/artwork/all.php?' + queryParams;
		var loc=window.location.href.split('?')[0];
		var u=loc+'?' + queryParams;
		window.open (u,'_self',false)
		return false;
	});
	this.count;
	this.len=0;
	tlens=0;
	tprices=0
	price=0;
	tprice=0;
	tlen=0;
	t=0;
	rt=0;
	p=0;
	<?php if(!isset($_SESSION['counters'])){ $_SESSION['counters']=0;}?>
	counter=<?php if(isset($_SESSION['counters'])){echo $_SESSION['counters'];}else{if($_SESSION['counters']==00){echo 0;}}?>
	//counter= <?php if(isset($_SESSION['counters'])){echo $_SESSION['counters'];}else{echo '0';}?>;	
	function vpb_multiple_file_uploader(vpb_configuration_settings)
	{	
	this.vpb_settings = vpb_configuration_settings;
	this.vpb_files = "";
	this.vpb_browsed_files = []
	var self = this;
	var vpb_msg = "Sorry, your browser does not support this application. Thank You!";
	//Get all browsed file extensions
	function vpb_file_ext(file) {
		return (/[.]/.exec(file)) ? /[^.]+$/.exec(file.toLowerCase()) : '';
	}
	/* Display added files which are ready for upload */
	//with their file types, names, size, date last modified along with an option to remove an unwanted file
	vpb_multiple_file_uploader.prototype.vpb_show_added_files = function(vpb_value,ans)
	{ //alert("ff<?php echo $_SESSION['counters'] ?>");		
		this.vpb_files = vpb_value;		
		if(this.vpb_files.length > 0)
		{	    counter++;					
				var vpb_added_files_displayer = vpb_file_id = "";
				var vpb_added_files_displayers = vpb_file_id = "";
				for(var i = 0; i<this.vpb_files.length; i++)
				{  
				len=0;
				filetexts='';
				var file='';
				var  file = this.vpb_files[i];
				var result='';						
				len=0;				
				price=0;
				if(price<20)
						{
						//price=20;
						}	
				//Use the names of the files without their extensions as their ids
				var files_name_without_extensions = this.vpb_files[i].name.substr(0, this.vpb_files[i].name.lastIndexOf('.')) || this.vpb_files[i].name;
				vpb_file_id = files_name_without_extensions.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
				var vpb_file_to_add = vpb_file_ext(this.vpb_files[i].name);
				var vpb_class = $("#added_class").val();
				var vpb_file_icon;
				//Check and display File Size
				var vpb_fileSize = (this.vpb_files[i].size / 1024);
				if (vpb_fileSize / 1024 > 1)
				{
					if (((vpb_fileSize / 1024) / 1024) > 1)
					{
						vpb_fileSize = (Math.round(((vpb_fileSize / 1024) / 1024) * 100) / 100);
						var vpb_actual_fileSize = vpb_fileSize + " GB";
					}
					else
					{
						vpb_fileSize = (Math.round((vpb_fileSize / 1024) * 100) / 100)
						var vpb_actual_fileSize = vpb_fileSize + " MB";
					}
				}
				else
				{
					vpb_fileSize = (Math.round(vpb_fileSize * 100) / 100)
					var vpb_actual_fileSize = vpb_fileSize  + " KB";
				}
				//Check and display the date that files were last modified
				var vpb_date_last_modified = new Date(this.vpb_files[i].lastModifiedDate);
				var dd = vpb_date_last_modified.getDate();
				var mm = vpb_date_last_modified.getMonth() + 1;
				var yyyy = vpb_date_last_modified.getFullYear();
				var vpb_date_last_modified_file = dd + '/' + mm + '/' + yyyy;
				//File Display Classes
				if( vpb_class == 'vpb_blue' ) { 
					var new_classc = 'vpb_white';
				} else {
					var new_classc = 'vpb_blue';
				}				
				if(typeof this.vpb_files[i] != undefined && this.vpb_files[i].name != "")
				{
					//Check for the type of file browsed so as to represent each file with the appropriate file icon
					var dots='';
					var dlen=this.vpb_files[i].name.length;							
					if(dlen>37){
					dots='...';
					}					
					vpb_file_id=counter;	
					if(ans=='yes'){					
					//Assign browsed files to a variable so as to later display them below
					vpb_added_files_displayer += '<div id="add_fileID'+vpb_file_id+'" align="left" class="'+new_classc+'" style=" margin-left:1px;"><div class="vpb_header_file_names" id="vpb_file_system_displayer_header" class="hove_this_link"><div class="filename" ><div class="icondiv" id="icon'+vpb_file_id+'"> </div>'+this.vpb_files[i].name.substring(0, 37)+''+dots+' ('+vpb_actual_fileSize+')</div></div><div id="vpb_files_remove_left"><span id="up'+vpb_file_id+'"></span><span id="remove'+vpb_file_id+'"><span class="vpb_files_remove_left_inner" onclick="vpb_remove_this_file(\''+vpb_file_id+'\',\''+this.vpb_files[i].name+'\',\''+counter+'\');">Remove</span></span></div><br clear="all" /></div>';
					vpb_added_files_displayers += '<div id="add_fileIDs'+vpb_file_id+'" align="left" class="'+new_classc+'" style=" margin-left:1px;"><div class="vpb_header_file_namess" class="hove_this_link"><div class="filenames_right"><a href="uploaded_files/'+this.vpb_files[i].name+'">'+vpb_file_icon+' '+this.vpb_files[i].name.substring(0, 20)+'</a></div><div class="words_right"><span id="uploadings'+vpb_file_id+'"><span class="readys">'+len+'</span></span></div></div><div class="vpb_files_size_right" id="vpb_files_size_left'+counter+'"> $ '+price+'</div><br clear="all" /></div>';
					$("#vpb_added_files_box").append(vpb_added_files_displayer);
					$("#added_class").val(new_classc);	
					tlens=0;
					tprices=0;
					 //$('#vpb_added_files_box').load('documents.php #vpb_added_files_box');
					}
				}
			}
			//Display browsed files on the screen to the user who wants to upload them
		}
	}
	totimg=0;
	totimg=<?php if(isset($_SESSION['arrs'])){echo count($_SESSION['arrs']);}else{echo 0;}?>
	//File Reader
	vpb_multiple_file_uploader.prototype.vpb_read_file = function(vpb_e) {
		var fname=vpb_e.target.files[0].name;				
		if(vpb_e.target.files) {
		//"application/vnd.openxmlformats-officedocument.wordprocessingml.docume
			var myFileName = fname.substr(0,fname.lastIndexOf("."));
			var myFileExt = fname.substr(fname.lastIndexOf(".") + 1,fname.length);		
			if(totimg<=5)
			{$("#errs").html('');
			if(myFileExt=='png' || myFileExt=='jpg' || myFileExt=='JPG' || myFileExt=='jpeg' || myFileExt=='gif')
			{
			self.vpb_show_added_files(vpb_e.target.files,'yes');	
			self.vpb_browsed_files.push(vpb_e.target.files);
			self.vpb_upload_bgin();							
			}
			else
			{
			alert('Invalid File Type');
			}			
		} else {
		$("#errs").html('Max number of files exceeded');
			//alert('Sorry, a file you have specified could not be read at the moment. Thank You!');
		}
		}
	}
	function addEvent(type, el, fn){
	if (window.addEventListener){
		el.addEventListener(type, fn, false);
	} else if (window.attachEvent){
		var f = function(){
		  fn.call(el, window.event);
		};			
		el.attachEvent('on' + type, f)
	}
	}	
	//Get the ids of all added files and also start the upload when called
	vpb_multiple_file_uploader.prototype.vpb_starter = function() {
		if (window.File && window.FileReader && window.FileList && window.Blob) {		
				var vpb_browsed_file_ids = $("#"+this.vpb_settings.vpb_form_id).find("input[type='file']").eq(0).attr("id");
				document.getElementById(vpb_browsed_file_ids).addEventListener("change", this.vpb_read_file, false);
				document.getElementById(this.vpb_settings.vpb_form_id).addEventListener("submit", this.vpb_submit_added_files, true);
			} 
		else { alert(vpb_msg); }
	}
	//Call the uploading function when click on the upload button
	vpb_multiple_file_uploader.prototype.vpb_submit_added_files = function(){ self.vpb_upload_bgin(); }
	//Start uploads
	vpb_multiple_file_uploader.prototype.vpb_upload_bgin = function() {
		var l=this.vpb_browsed_files.length;
		if(this.vpb_browsed_files.length > 0) {
			for(var k=0; k<1; k++){
				var file = this.vpb_browsed_files[l-1];				
					this.vasPLUS(file,0);
			}
		}	
	}	
	//Main file uploader
	vpb_multiple_file_uploader.prototype.vasPLUS = function(file,file_counter)
	{ 
		if(typeof file[file_counter] != undefined && file[file_counter] != '')
		{
			//Use the file names without their extensions as their ids
			var files_name_without_extensions = file[file_counter].name.substr(0, file[file_counter].name.lastIndexOf('.')) || file[file_counter].name;
			//Check and display File Size
				var vpb_fileSize = (file[file_counter].size / 1024);
				if (vpb_fileSize / 1024 > 1)
				{
					if (((vpb_fileSize / 1024) / 1024) > 1)
					{
						vpb_fileSize = (Math.round(((vpb_fileSize / 1024) / 1024) * 100) / 100);
						var vpb_actual_fileSize = vpb_fileSize + " GB";
					}
					else
					{
						vpb_fileSize = (Math.round((vpb_fileSize / 1024) * 100) / 100)
						var vpb_actual_fileSize = vpb_fileSize + " MB";
					}
				}
				else
				{
					vpb_fileSize = (Math.round(vpb_fileSize * 100) / 100)
					var vpb_actual_fileSize = vpb_fileSize  + " KB";
				}
			var ids = files_name_without_extensions.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
			ids=counter;
			var vpb_browsed_file_ids = $("#"+this.vpb_settings.vpb_form_id).find("input[type='file']").eq(0).attr("id");
			var removed_file = $("#"+ids).val();			
			if ( removed_file != "" && removed_file != undefined && removed_file == ids )
			{
				self.vasPLUS(file,file_counter+1);
			}
			else
			{
				var dataString = new FormData();
				dataString.append('upload_file',file[file_counter]);
				dataString.append('upload_file_ids',ids);
				$.ajax({
					type:"POST",
					url:this.vpb_settings.vpb_server_url,
					data:dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
						$("#uploading_"+ids).html('<div align="left"><img src="images/loadings.GIF" style="width:30px;height:30px" align="absmiddle" title="Upload...."/></div>');
						$("#up"+ids).html('<div align="center"  style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:blue;"><img class="loading"  src="images/loadings.GIF"  align="absmiddle" title="Upload...."></div>');
						$("#remove"+ids).hide();	
						//$("#btncert").hide();
						$('#vasplus_multiple_files').attr('disabled','disabled');
						$('#btncert').addClass( "btncert" );						
						$("#uploadmsg").show();						
						$("#vpb_files_size_left"+ids).html('');
						$("#waittxt").html('Please wait...');
					},
					success:function(response) 
					{    
						setTimeout(function() {
							var response_brought = response;							
							if ( response_brought != -1) {
							$("#waittxt").html('');
							$('#vasplus_multiple_files').removeAttr("disabled");
							$("#up"+ids).hide();
							$("#remove"+ids).show();
							var res=response_brought.split("#");
							var oriname=res[0];
							$("#icon"+ids).html('<img class="icon" src="uploaded_files/'+oriname+'" />');
							var len=Number(res[1]);
							price=len/10;
							$("#remove"+ids).html('<span class="vpb_files_remove_left_inner" onclick="vpb_remove_this_file(\''+ids+'\',\''+file[file_counter].name+'\',\''+ids+'\');">Remove</span>');
							insertuploads(ids,oriname,len,price,'vpb_added_files_displayer','vpb_added_files_displayers',ids,vpb_actual_fileSize);
							$("#up"+ids).hide();
							$("#remove"+ids).show();							
							$("#uploadmsg").hide();
							} else {
								var fileType_response_brought = response.indexOf('file_type_error');
								if ( fileType_response_brought != -1) {
									var filenamewithoutextension = response.replace('file_type_error&', '').substr(0, response.replace('file_type_error&', '').lastIndexOf('.')) || response.replace('file_type_error&', '');
									var fileID = filenamewithoutextension.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
									$("#uploading_"+fileID).html('<div align="left" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:red;">Invalid File</div>');
									//$("#remove"+fileID).html('<div align="center" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:orange;">Cancelled</div>');
								} else {
									var filesize_response_brought = response.indexOf('file_size_error');
									if ( filesize_response_brought != -1) {
										var filenamewithoutextensions = response.replace('file_size_error&', '').substr(0, response.replace('file_size_error&', '').lastIndexOf('.')) || response.replace('file_size_error&', '');
										var fileID = filenamewithoutextensions.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
										$("#uploading_"+fileID).html('<div align="left" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:red;">Exceeded Size</div>');
										$("#remove"+fileID).html('<div align="center" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:orange;">Cancelled</div>');
									} else {
										var general_response_brought = response.indexOf('general_system_error');
										if ( general_response_brought != -1) {
											//alert('Sorry, a file was not uploaded...');
										}
										else { /* Do nothing */}
									}
								}
							}
							if (file_counter+1 < file.length ) {
								//self.vasPLUS(file,file_counter+1); 
							} 
							else {}
						},4000);
					}
				});
			 }
		} 
		else { alert('Sorry, this system could not verify the identity of the file you were trying to upload at the moment. Thank You!'); }
	}
	this.vpb_starter();
	}
	// Call the main function
	new vpb_multiple_file_uploader
	({
		vpb_form_id: "vasplus_form_id", // Form ID
		autoSubmit: true,
		vpb_server_url: "vpb_uploader.php" // PHP file for uploading the browsed files
		// To modify the design and display of the browsed file,
		// Open the file named js/vpb_uploader.js and search for the following: /* Display added files which are ready for upload */
		// You can modify the design and display of browsed files and also the CSS file as wish.
	});
	});
	</script>
	<!--Pagination-->
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
	$(function() {
	//$( "#datepicker" ).datepicker();
	$('#datepicker').datepicker({
    changeMonth: true,
    changeYear: true,
   minDate:null
});
	});
	</script>
	<script type="text/javascript" src="js/virtualpaginate.js">
	</script>
	<!--[if IE 7]>
	<link rel="stylesheet" href="style_ie7.css" type="text/css" media="screen" />
	<![endif]-->
	<!--Timer-->
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<link type="text/css" href="css/jquery.countdown.css" rel="stylesheet" />
	<style type="text/css">
	.defaultCountdown { width: 160px; height: 40px; }
	</style>
	<script type="text/javascript">
	function stimer(d,c,mo,da,y,h,m,s)
	{		//	alert(y);
	var austDay = new Date();	
	austDay = new Date(y, mo-1,da,h,m,s);
	//austDay = new Date(y, mo-1,8,10,19,s);
	for(var i=0;i<=c;i++)
	{	
	$('#defaultCountdown'+i).countdown({until: austDay, serverSync: ahead5Mins});
	}
	}
	function ahead5Mins() { 
	var time = null; 
	$.ajax({url: 'serverTime.php', 
		async: false, dataType: 'text', 
		success: function(text) { 
			time = new Date(text);
		}, error: function(http, message, exc) { 
			time = new Date(); 
	}}); 
	return time; 
	}
	</script>
	<!--ToolTip-->
	<style type="text/css" media="all">
	@import "css/global.css";
	</style>
	<script src="js/jtip.js" type="text/javascript"></script>
	<!--Slider-->
	<link href="css/generic.css" rel="stylesheet" type="text/css" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-slider.js" type="text/javascript"></script>
	<!--  <script src="js/tooltip.js" type="text/javascript"></script>
	<link href="css/tooltip.css" rel="stylesheet" type="text/css" />-->
	<style>
		.tips b {display:none; text-align:center; margin-bottom:0px;}
	</style>
	  <!--script for gallery start-->
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});
				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
				<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
			<!--script for gallery end-->
	<!-- basic fancybox setup -->
	  <script src="js/portBox.slimscroll.min.js"></script>
	  <link href="css/portBox.css" rel="stylesheet" />
	<script type="text/javascript">
	function setcook(cur,sym)
	{ 
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	var totimg=xmlhttps.responseText;	
	}
	}
	xmlhttps.open("GET","certifiedupload.php?setcur="+cur+"&setsym="+sym,true);
	xmlhttps.send();
	}
	function setCurrencyDefaultss(cur,sym)
	{
	alert(sym);
	setcook(cur,sym);
	}
	//BIDS DELETE (MY ACCont)
	function delbids(artid)
	{ 
	var rest=confirm('Do you want to delete this bid from this listing');
	if(!rest)
	{
	return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	var totimg=xmlhttps.responseText;
	alert(totimg);
	location.reload();
	}
	}
	xmlhttps.open("GET","certifiedupload.php?delbids=u&artid="+artid,true);
	xmlhttps.send();
	}
	//delete OFFERS (MY ACCont)
	function deloffer(artid)
	{ 
	var rest=confirm('Do you want to delete this offer from this listing');
	if(!rest)
	{
	return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	var totimg=xmlhttps.responseText;
	alert(totimg);
	location.reload();
	}
	}
	xmlhttps.open("GET","certifiedupload.php?deloffer=u&artid="+artid,true);
	xmlhttps.send();
	}
	/*delete watch list (MY Account)*/
	function delwatch(artid)
	{ 
	var rest=confirm('Do you want to delete this listing from watch list?');
	if(!rest)
	{
	return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttps=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttps.onreadystatechange=function()
	{
	if (xmlhttps.readyState==4 && xmlhttps.status==200)
	{
	var totimg=xmlhttps.responseText;
	alert(totimg);
	location.reload();
	}
	}
	xmlhttps.open("GET","certifiedupload.php?delwatch=u&artid="+artid,true);
	xmlhttps.send();
	}
	/*Delete Listing from my account*/	
	function dellist(artid)
	{ 
	var rest=confirm('Do you want to delete this listing from your account?');
	if(!rest)
	{
	return false;
	}
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttps=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttps=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttps.onreadystatechange=function()
	  {
	  if (xmlhttps.readyState==4 && xmlhttps.status==200)
		{
		var totimg=xmlhttps.responseText;
		alert(totimg);
		location.reload();
		}
	  }
	xmlhttps.open("GET","certifiedupload.php?dellist=u&artid="+artid,true);
	xmlhttps.send();
	}
		/*Add artist to alerts*/
		function artalerts(artist,action){	
		var s='<?php  if(!isset($_SESSION['mainuser'])){echo 'false';}?>';
			if(s=='false')
			{			
			alert("Please Login to add artist to alerts");		
			return false;
			}
			
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('artalert',artist);				
				dataString.append('action',action);		
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
						$("#artarea").html('<div align="left"><img src="images/loadings.GIF" style="width:30px;height:30px" align="absmiddle" title="Upload...."/></div>');
					},
					success: function(data) {					
					location.reload();							
					}
				});
		}
		function chgcurrency(curr,symbol){	
				var selectedVal=curr;
	var currency_sumbols = {
	'USD': '$', // US Dollar
	'EUR': '&euro;', // Euro
	'JPY': '&yen;', // Euro
	'AUD': '$', // Costa Rican Colón
	'GBP': '&pound;', // British Pound Sterling
	'CAD': '$', // Israeli New Sheqel
	'INR': '&#8377;', // Indian Rupee
	'HKD': '$', // Japanese Yen
	'NZD': '$', // South Korean Won
	'CNY': '&#165;', // Nigerian Naira
	'ILS': '&#8362;', // Philippine Peso
	'MXN': '$', // Polish Zloty
	};
	var currency_name = selectedVal;
	var curcode='';
	if(currency_sumbols[currency_name]!==undefined) {
	curcode=currency_sumbols[currency_name];
	}			
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('setcook','ids');				
				dataString.append('setid',selectedVal);				
				dataString.append('setcode',curcode);				
				$("#send").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data:dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
					$("#flagcook").html('<div align="center"  style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:blue;"><img class="loading"  src="images/loadings.GIF"  align="absmiddle" title="Upload...."></div>');
					},
					success: function(data) {				
						$('#mask').hide();
						$('.window').hide();
						location.reload();
					}
				});
		}
		/*Add gallery to alerts*/
		function galalerts(gallery,action){		
			var s='<?php  if(!isset($_SESSION['mainuser'])){echo 'false';}?>';
			if(s=='false')
			{
			alert("Please Login to add artist to alerts.");		
			return false;
			}	
			
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('galalert',gallery);				
				dataString.append('action',action);		
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
						$("#galarea").html('<div align="left"><img src="images/loadings.GIF" style="width:30px;height:30px" align="absmiddle" title="Upload...."/></div>');
					},
					success: function(data) {					
					location.reload();							
					}
				});
		}
		
		/* Offer accept by seller*/		
		
		function offeracc(offerid,artid,subamt,madeby,id,inc){	
		
				var dataString = new FormData();				
				dataString.append('offeraccid',offerid);				
				dataString.append('artid',artid);				
				dataString.append('madeby',madeby);		
				dataString.append('offeramt',subamt);		
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
						$("#offerloads"+id).html('<div align="left"><img src="images/loadings.GIF" style="width:30px;height:30px" align="absmiddle" title="Upload...."/></div>');
					},
					success: function(data) {					
					$("#offerloads"+id).html('<div align="left">'+data+'</div>');		
					$('#subheadout'+id+inc).load('sellingdetail.php #subheadacc'+id+inc);	
											
					}
				});
		}
		
	$(document).ready(function() {	
	
		//Messages delete from my account
		$('a#msgdel').click(function() {	
		var checked = [];	
		var filter=$("#filter").val();	
				$("input[name='msg[]']:checked").each(function ()
				{
					checked.push(parseInt($(this).val()));
				});
				if(checked.length==0)
				{
				alert('Please select at least 1 message to delete.');
				return false;
				}
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('msgdelid',checked);					
				dataString.append('filter',filter);					
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
						$("#artarea").html('<div align="left"><img src="images/loadings.GIF" style="width:30px;height:30px" align="absmiddle" title="Upload...."/></div>');
					},
					success: function(data) {					
					location.reload();							
					}
				});
		});
		//Customization
			
		
		
		
		
			$("#custom").on("click", function(){
			var selected = $("input[type='radio'][name='setCountry']:checked");
				if (selected.length > 0) {
					selectedVal = selected.val();
				}
	var currency_sumbols = {
	'USD': '$', // US Dollar
	'EUR': '&#8364', // Euro
	'AUD': '$', // Costa Rican Colón
	'GBP': '&pound;', // British Pound Sterling
	'CAD': '$', // Israeli New Sheqel
	'INR': '&#8377;', // Indian Rupee
	'HKD': '&#165;', // Japanese Yen
	'NZD': '$', // South Korean Won
	'CNY': '&#165;', // Nigerian Naira
	'ILS': '₱', // Philippine Peso
	'MXN': '$', // Polish Zloty
	};
	var currency_name = selectedVal;
	var curcode='';
	if(currency_sumbols[currency_name]!==undefined) {
	curcode=currency_sumbols[currency_name];
	}				
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('setcook','ids');				
				dataString.append('setid',selectedVal);				
				dataString.append('setcode',curcode);				
				$("#send").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data:dataString,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() 
					{
					$("#flagcook").html('<div align="center"  style="font-family:Verdana, Geneva, sans-serif;font-size:11px;color:blue;"><img class="loading"  src="images/loadings.GIF"  align="absmiddle" title="Upload...."></div>');
					},
					success: function(data) {				
						$('#mask').hide();
						$('.window').hide();
						location.reload();
					}
				});
		});
			
				$("form#upForms").submit(function(){
				var formData = new FormData($(this)[0]);
				var res=validateTextBoxes('upForms');	
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				if(res)
				{	
				var s=acceptcheck();	
				if(s)
				{
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('upload_file_ids','ids');				
				$("#send").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: formData,
		async: false,
					success: function(data) {	
						if(data==false )
						{ 						
							$("#register").nextAll('span.err').remove();
							$("#register").after( "<span class=err>Username is unavailable.</span>" );
						}		
						else
						{						
							$("#register").nextAll('span.err').remove();
							alert("You have been successfully registered");
							location.reload();						
						}						
						if(data == true) {						
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your message has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 2000);
							});
						}
					}, cache: false,
		contentType: false,
		processData: false
				});
			}
			}
			return false;
		});
			
		/*My account */
			$("form#accountForms").submit(function(){
				var formData = new FormData($(this)[0]);
				var res=validateacc('accountForms');			
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				if(res)
				{									
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',					
					data: formData,
					async: false,
					success: function(data) {					
						if(data==false )
						{ 						
							$("#register").nextAll('span.err').remove();
							$("#register").after( "<span class=err>Username is unavailable.</span>" );
						}		
						else
						{						
							$("#register").nextAll('span.err').remove();
							alert("You account has been successfully updated");
							location.reload();						
						}						
					}, cache: false,
		contentType: false,
		processData: false
				});
			}
			return false;
		});
		/*Artist account */
			$("form#artistaccountForms").submit(function(){
				var formData = new FormData($(this)[0]);
				var res=validateacc('artistaccountForms');			
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				if(res)
				{									
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',					
					data: formData,
					async: false,
					success: function(data) {					
						if(data==false )
						{ 						
							$("#register").nextAll('span.err').remove();
							$("#register").after( "<span class=err>Username is unavailable.</span>" );
						}		
						else
						{						
							$("#register").nextAll('span.err').remove();
							alert("You account has been successfully updated");
							location.reload();						
						}						
					}, cache: false,
		contentType: false,
		processData: false
				});
			}
			return false;
		});
		/*Customer account */
			$("form#cusaccountForms").submit(function(){			
				var formData = new FormData($(this)[0]);
				var res=validateacc('cusaccountForms');			
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				if(res)
				{									
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',					
					data: formData,
					async: false,
					success: function(data) {	
						if(data==false )
						{ 						
							$("#register").nextAll('span.err').remove();
							$("#register").after( "<span class=err>Username is unavailable.</span>" );
						}		
						else
						{						
							$("#register").nextAll('span.err').remove();
							alert("You account has been successfully updated");
							location.reload();						
						}						
					}, cache: false,
		contentType: false,
		processData: false
				});
			}
			return false;
		});
		//Reset Password
				$("form#passreset").submit(function(){	
				$("#sucreset").html('');
				var formData = new FormData();
				var res=validateTextBoxes('passreset');					
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				if(res)
				{				
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('upload_file_ids','ids');				
				$("#send").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',					
					data: $("#passreset").serialize(),					     
					success: function(data) {					
					$("#sucreset").html(data);
					} 
				});
			}
			return false;
		});
		$("#send").on("click", function(){
				var res=validateTextBoxes('contact');					
				if(res)
				{	
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('upload_file_ids','ids');				
				$("#send").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: $("#contact").serialize(),
					success: function(data) {				
						if(data == true) {						
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your message has been sent, thanks :)</strong></p>");
								setTimeout("$.fancybox.close()", 2000);
							});
						}
					}
				});
			}
		});
		$("#sendmsg").on("click", function(){		
				var res=validateTextBoxes('ques');			
				if(res)
				{	
				var dataString = new FormData();				
				dataString.append('upload_file_ids','ids');				
				$("#sendmsg").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: $("#ques").serialize(),
					success: function(data) {					
						if(data == true) {							
							$("#ques").fadeOut("fast", function(){
								$(this).before("<p><strong>Success! Your question has been submitted.</strong></p>");
								setTimeout("$.fancybox.close()", 2000);
							});
						}
					}
				});
			}
		});
	//Report
	$("#reportmsg").on("click", function(){
				var res=validateTextBoxes('report');			
				if(res)
				{	
				var dataString = new FormData();
				//dataString.append('upload_file',file[file_counter]);
				dataString.append('upload_file_ids','ids');				
				$("#reportmsg").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'certifiedupload.php',
					data: $("#report").serialize(),
					success: function(data) {					
						if(data == true) {							
							$("#report").fadeOut("fast", function(){
							$(this).before("<p><strong>Your report has been submitted.</strong></p>");
							setTimeout("$.fancybox.close()", 1000);
							});
						}
					}
				});
			}
		});
	});
	</script>
	<!--Login with facebook-->
	<!--<script type="text/javascript" src="js/oauthpopup.js"></script>-->
	<script type="text/javascript">
	$(document).ready(function(){
	/*Credit card */
	$('.cardForms #btncard').click(function() {	
	var res = validateTextBoxes('cardForms');
	if(res)
	{
	var result = 0;
	var inputVal = $('#amt').val();
var ccard = $('#cardtype').val();
if(ccard == 'Visa')
{
var ccReg = /^4[0-9]{12}(?:[0-9]{3})?$/;
if(!ccReg.test(inputVal)) {
$('#amt').nextAll('span.err').remove();
$('#amt').after( "<span class=err>Invalid card number.</span>" );
return false;
}

}
else if(ccard == 'Master Card')
{
var ccReg = /^(?:5[1-5][0-9]{14})$/;
if(!ccReg.test(inputVal)) {
$('#amt').nextAll('span.err').remove();
$('#amt').after( "<span class=err>Invalid card number.</span>" );
return false;
}
}
else if(ccard == 'Amex')
{
var ccReg = /^(?:3[47][0-9]{13})$/;
if(!ccReg.test(inputVal)) {
$('#amt').nextAll('span.err').remove();
$('#amt').after( "<span class=err>Invalid card number.</span>" );
return false;
}
}
return true;
}
return false;
});
	
	
	
	
	$('#facebook').click(function(e){
		$.oauthpopup({
			path: 'login.php',
			width:600,
			height:300,
			callback: function(){
				window.location.reload();
			}
		});
		e.preventDefault();
	});
	});$(window).load(function(){	  
            $('div.loader').hide();
        });
	</script>

	<!--
	INR SIGN
	<script src="http://cdn.webrupee.com/js" type="text/javascript"></script>
	<span class="WebRupee">Rs.</span>-->
	</head>