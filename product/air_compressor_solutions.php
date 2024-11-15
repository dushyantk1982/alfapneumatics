<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Website for Management Education College" />
<meta name="keywords" content="Management,MBA,BBA,MCA,BCA,Bcom,Graduation,PostGraduation" />
<title>Alfapneumatics</title>
<link rel="shortcut icon" href="../images/logo.jpg" />
<link href="../stylesheet.css" type="text/css" rel="stylesheet" />
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2
{
font-size:14px;
font-family:"Times New Roman", Times, serif;
color:#000033;}
-->
.left_content
{
float:left;
height:800px;
width:250px;
margin-top:auto;
padding:0px;
margin:0px;
background-color:#ffffff;
border:1px solid #000;
}
.right_content
{
float:left;
height:800px;
width:728px;
margin-top:auto;
padding:0px;
margin:0px;
background-color:#ffffff;
border:1px solid #000;
}
ul{list-style:none;
padding:1px;
}
ul li{float:left;
margin-top:5px;}
ul li:hover a{color:#0099FF;}
ul li a{
display:block;
color:#000000;
text-decoration:none;
font-weight:bold;
}

</style>
<link rel="shortcut icon" href="images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet" />

<!--<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />-->
    
    
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
    
    
<link media="screen" rel="stylesheet" href="../css/colorbox.css" />
<!--gallery script-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="colorbox/jquery.colorbox.js"></script>
		<script>
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$("a[rel='example1']").colorbox();
			$("a[rel='example2']").colorbox({transition:"fade"});
			$("a[rel='example3']").colorbox({transition:"none", width:"75%", height:"75%"});
			$("a[rel='example4']").colorbox({slideshow:true});
			$(".example5").colorbox();
			$(".example6").colorbox({iframe:true, innerWidth:425, innerHeight:344});
			$(".example7").colorbox({width:"80%", height:"80%", iframe:true});
			$(".example8").colorbox({width:"50%", inline:true, href:"#inline_example1"});
			$(".example9").colorbox({
				onOpen:function(){ alert('onOpen: colorbox is about to open'); },
				onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
				onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
				onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
				onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
			});
			
			//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});
		});
	</script>
    
    <!--gallery script end-->

</head>

<body>
<script type="text/javascript" src="https://mylivechat.com/chatinline.aspx?hccid=42682392"></script>
<div class="wrapper">
	<div class="head">
		<?php include('header.php'); ?>
		<!--<div class="layer" align="right">
			<a href="#" class="style2">Admin Login</a>|
			<a href="#" class="style2">Site Map</a>|
			<a href="#" class="style2">Contact Us</a>
		</div>
		<div class="layer1">
			<table width="100%">
    			<tr>
      				<td width="40%" valign="top">
						<div align="right">
							<input type="image" src="../images/logp_alfa.jpg" alt="Alfapneumatics" align="middle" height="65" width="210" />&nbsp;
						</div>
					</td>
					<td width="60%" valign="baseline">
						<div align="left">
							<span class="logo" style="font-weight:bold; color:#0066FF;">PNEUMATIC</span>
						</div>
					</td>
				</tr>
				<tr>
					<td width="25%">--><!--<div align="left"><a href="https://www.facebook.com/bvmcme" title="FaceBook"><img src="images/fb.png" height="15" width="15" /></a>&nbsp;<a href="https://www.google.com/a/bvmgroup.org/ServiceLogin?service=mail&amp;passive=true&amp;rm=false&amp;continue=http://mail.google.com/a/bvmgroup.org/&amp;ltmpl=default&amp;ltmplcache=2" target="_blank" title="Gmail"><img src="images/gmail.png" height="17" width="17" /></a>&nbsp;<a href="admin/adlogin.php" title="Admin"><img src="images/lock.gif" height="15" width="15" /></a></div></td>
					<td width="75%">
						<div align="center">Authorised Distributors</div>
						</td></tr>
			</table>
			<!--<span style="color: #B7B7B7">
				<marquee behavior="scroll" direction="left" style="background-color:#660000;">
					<span style="font-family: &quot;Courier New&quot;, Courier, monospace" style="color:#FFFFFF;">Admissions are open for 2014-15 | 24 x 7 Helpline:9301129088/9303714455 </span>
				</marquee>
			</span>
		</div>
		<div class="layer2">
			<?php //include('menu.php'); ?>
		</div>-->
	</div>
	<div class="air_comp_container">
		<!--<div class="left"></div>-->
		<!--<div class="banner" align="center">
			<div align="center">
				<img src="images/block1.jpg" alt="rotating image" name="rotator" width="985" height="300" id="rotator" />
			</div>
		</div>-->
		<div class="product" align="center">
			<h2 style="color:#000; display:block; background:#1F7EB6; color:#FFFFFF;">&nbsp;Air Compressor Solutions</h2>
                       <div class="clear"></div>

<!--<div id="contentCntr">
<div class="contentRow">
<div class="innerCotnLeft">
  
  <div class="promenu">-->
  <div class="left_content" align="left">
    <?php
  if($_REQUEST['cat']=='Rotary_Contact_Cooled_Air_Compressors')
	{
		echo "<ul>
      <li style='margin-top:120px;'><a href='air_compressor_solutions.php?cat=1'><hr/>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2' class='active'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";
	}
else if($_REQUEST['cat']=='Rotary_Oil_Free_Air_Compressors')
{
echo "<ul>
      <li><a href='air_compressor_solutions.php?cat=1'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3' class='active'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";
}
else if($_REQUEST['cat']=='Centrifugal_Air_Compressors')
{
echo "<ul>
      <li><a href='air_compressor_solutions.php?cat=1'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4' class='active'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";

}
else if($_REQUEST['cat']=='PET_Blow_Molding_Air_Compressors')
{
echo "<ul>
      <li><a href='air_compressor_solutions.php?cat=1'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5' class='active'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";

}
else if($_REQUEST['cat']=='Compressed_Air_Treatment')
{
echo "<ul>
     <li><a href='air_compressor_solutions.php?cat=1'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6' class='active'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";

}
else if($_REQUEST['cat']=='Compressed_Air_Controls_Automation')
{
echo "<ul>
      <li><a href='air_compressor_solutions.php?cat=1'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7' class='active'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";


}
else if($_REQUEST['cat']=='Compressed-Air_Services')
{
echo "<ul>
     <li><a href='air_compressor_solutions.php?cat=1'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";

}
else
{
	echo "<ul>
      <li><a href='air_compressor_solutions.php?cat=1' class='active'>Small Reciprocating Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=2'>Rotary Contact-Cooled Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=3'>Rotary Oil-Free Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=4'>Centrifugal Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=5'>PET Blow Molding Air Compressors</a></li>
      <li><a href='air_compressor_solutions.php?cat=6'>Compressed Air Treatment</a></li>
      <li><a href='air_compressor_solutions.php?cat=7'>Compressed Air Controls & Automation</a></li>
      <li><a href='http://www.ingersollrandproducts.com/am-en/products/air/services' target='_blank'>Compressed Air Services</a></li>
      </ul>";
}
  ?>
  </div>
<!--</div>-->

<!--<div class="innerCotn">
  <div class="catagallery">-->
  <div class="right_content">
	<?php if($_REQUEST['cat']=='2'){ ?>
  		<iframe src="ingersol/Rotary_Contact_Cooled_Air_Compressors.php" frameborder="0" height="800" width="728"></iframe>
	<?php }else if($_REQUEST['cat']=='3'){ ?>
  		<iframe src="ingersol/Rotary_Oil_Free_Air_Compressors.php" frameborder="0" height="800" width="728"></iframe>
	<?php }else if($_REQUEST['cat']=='4'){ ?>
  		<iframe src="ingersol/Centrifugal_Air_Compressors.php" frameborder="0" height="800" width="728"></iframe>
	<?php }else if($_REQUEST['cat']=='5'){ ?>
  		<iframe src="ingersol/PET_Blow_Molding_Air_Compressors.php" frameborder="0" height="800" width="728"></iframe>
	<?php }else if($_REQUEST['cat']=='6'){ ?>
  		<iframe src="ingersol/Compressed Air Treatment.php" frameborder="0" height="800" width="728"></iframe>
	<?php }else if($_REQUEST['cat']=='7'){ ?>
  		<iframe src="ingersol/Compressed Air Controls & Automation.php" frameborder="0" height="800" width="728"></iframe>
	
	
	<?php }else{ ?>
  		<iframe src="ingersol/Small_Reciprocating_Air_Compressors.php" frameborder="0" height="800" width="728"></iframe>
	<?php }?>
    
  <!--<ul>
<li>
<a href="Contents/TS4N5_l_thumb.jpg" rel="example2" title="Product Code : DD001"><img src="Contents/TS4N5_l_thumb.jpg" alt="" /></a>
<span>Product Code : CC001</span>
</li>
<li>Rotary_Oil_Free_Air_Compressors
<a href="Contents/TS4N5_l_thumb.jpg" rel="example2" title="Product Code : DD002"><img src="Contents/TS4N5_l_thumb.jpg" alt="" /></a>
<span>Product Code : CC002</span>
</li>

<li>
<a href="Contents/TS4N5_l_thumb.jpg" rel="example2" title="Product Code : DD003"><img src="Contents/TS4N5_l_thumb.jpg" alt="" /></a>
<span>Product Code : CC003</span>
</li>

<li>
<a href="Contents/TS4N5_l_thumb.jpg" rel="example2" title="Product Code : DD004"><img src="Contents/TS4N5_l_thumb.jpg" alt="" /></a>
<span>Product Code : CC004</span>
</li>

<li>
<a href="Contents/TS4N5_l_thumb.jpg" rel="example2" title="Product Code : DD005"><img src="Contents/TS4N5_l_thumb.jpg" alt="" /></a>
<span>Product Code : CC005</span>
</li>

<li>
<a href="photo_gallery/common_catalogue/006.jpg" rel="example2" title="Product Code : DD006"><img src="photo_gallery/common_catalogue/006.jpg" alt="" /></a>
<span>Product Code : CC006</span>
</li>

<li>
<a href="photo_gallery/common_catalogue/007.jpg" rel="example2" title="Product Code : DD007"><img src="photo_gallery/common_catalogue/007.jpg" alt="" /></a>
<span>Product Code : CC007</span>
</li>

<li>
<a href="photo_gallery/common_catalogue/008.jpg" rel="example2" title="Product Code : DD008"><img src="photo_gallery/common_catalogue/008.jpg" alt="" /></a>
<span>Product Code : CC008</span>
</li>

<li>
<a href="photo_gallery/common_catalogue/009.jpg" rel="example2" title="Product Code : DD009"><img src="photo_gallery/common_catalogue/009.jpg" alt="" /></a>
<span>Product Code : CC009</span>
</li>

<li>
<a href="photo_gallery/common_catalogue/010.jpg" rel="example2" title="Product Code : DD010"><img src="photo_gallery/common_catalogue/010.jpg" alt="" /></a>
<span>Product Code : CC010</span>
</li>

<li>
<a href="photo_gallery/common_catalogue/011.jpg" rel="example2" title="Product Code : DD011"><img src="photo_gallery/common_catalogue/011.jpg" alt="" /></a>
<span>Product Code : CC011</span>
</li>

</ul>-->
  <!--</div>
</div>
<p>&nbsp;</p>-->
</div>



</div>
	</div>
	<!--<div class="product_content">
		<table width="980">
			<tr>
				<td>
					<img src="images/Evolution_Air_Compressor(1)_l_thumb.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/Evolution Air Compressor - Filters.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/Evolution Air Compressor - Designed for High Flow.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/Air_oil separation.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/Designed for trouble free maintenance.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/7_5_11_KW_l_thumb.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/Designed for trouble free maintenance.jpg" height="100" width="100">
				</td>
				<td>
					<img src="images/thumb_refrigerated_dryer.jpg" height="100" width="100">
				</td>
			</tr>
		</table>
	</div>-->
	<div class="footer">
		<div class="footer1" align="center">
			<table width="984">
				<tr>
					<td width="100%" align="center">
						
					</td>
				</tr>
			</table>
		</div>
		<div class="footer2 style1"><hr />
			<table width="984">
				<tr>
					<td width="92%" align="center">&copy;Alfa Pneumatics. All rights are reserved.</td>
					<td width="8%" align="right">
						<a href="#" title="JMS Technologies"><img src="images/logod.jpg" height="20" width="60" alt="JMS Technologies"></a>					</td>
				</tr>
		  </table>
		</div>
	</div>
</div>
<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('rotator');
	var imageDir = 'images/';
	var delayInSeconds = 3;
	var images = ['hero1.jpg','hero3.jpg','hero4.jpg','hero5.jpg','hero6.jpg','hero7.jpg','hero8.jpg','block1.jpg'];
	var num = 0;
	var changeImage = function() {
	var len = images.length;
	rotator.src = imageDir + images[num++];
	if (num == len) {
	num = 0;
	}
	};
	setInterval(changeImage, delayInSeconds * 1000);
	})();
    </script>
</body>
</html>
