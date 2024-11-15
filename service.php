<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Website for Management Education College" />
<meta name="keywords" content="Management,MBA,BBA,MCA,BCA,Bcom,Graduation,PostGraduation" />
<title>Alfapneumatics</title>
<link rel="shortcut icon" href="images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet" />
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2
{
font-size:14px;
font-family:"Times New Roman", Times, serif;
color:#000033;}
-->
</style>
</head>

<body>

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
							<input type="image" src="images/logp_alfa.jpg" alt="Alfapneumatics" align="middle" height="65" width="210" />&nbsp;
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
	<div class="service_container">
		<!--<div class="left"></div>-->
		<div class="service_banner" align="center">
			<div align="center">
				<img src="images/block1.jpg" alt="rotating image" name="rotator" width="985" height="300" id="rotator" />
			</div>
		</div>
		<div class="service_left" align="center">
			<h2 style="color:#000; display:block; background:#1F7EB6; color:#1F7EB6;">ImG</h2>
                        <p style="color:#000; text-align:justify;"></p>
			<img src="images/img1.png" height="200" width="200" />
		</div>
		<div class="service_right">
			<h2 style="color:#000; display:block; background:#990000; color:#FFFFFF; text-align:center;">&nbsp;Our Services</h2>
				<ul>
						<li>A team of after-sales personnel who provide service to our customer.</li>
						<li>A well maintained storage system for the parts with location & stock quantity updated through computer for ensuring quick delivery of spares to customers.</li>
						<li>trained team members & is supported by service engineers of our Dealers.</li>
						<li>Dealer’s network well spread all over India.</li>
						<li>Warranty of 12 Months.</li>
						<li>All service calls attended within 36 Hours.</li>
						<li>All break-down jobs attended within 24 hours of reporting.</li>
						<li>Annual Maintenance Contract available on nominal charges</li>
						<li>Regular trainings conducted for technicians of dealers & customers</li>
					</ul>
		</div>
	</div>
	
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
