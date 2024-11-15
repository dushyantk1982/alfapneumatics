<html>
<head>
<title>My Menu</title>
<style type="text/css">
nav ul ul{display:none;}
nav ul li:hover > ul{display:block;}
nav ul
{
backgroud:#660000;
background:linear-gradient(top,#660000 0%,#660000 100%);
background:-moz-linear-gradient(top,#660000 0%,#660000 100%);
background:-webkit-linear-gradient(top,#660000 0%,#660000 100%);
box-shadow:0px 0px 9px rgba(0,0,0,0.15);
padding:0 20px;
border-radius:0px;
list-style:none;
position:relative;
display:inline-table;

}
nav ul:after
{content:"";
clear:both;
display:block;
}
nav ul li{float:left;}
nav ul li:hover
{
backgroud:#4b545f;
background:linear-gradient(top,#4E5964 0%,#5F6975 40%);
background:-moz-linear-gradient(top,#4E5964 0%,#5F6975 40%);
background:-webkit-linear-gradient(top,#4E5964 0%,#5F6975 40%);
}

nav ul li:hover a{color:#ffff00;}
nav ul li a{
display:block;
padding:5px 40px;
color:#efefef;
text-decoration:none;
font-weight:bold;

}
nav ul ul
{
background:#5F6975;
border-radius:0px;
padding:0;
position:absolute;
top:100%;

}
nav ul ul li
{
float:none;
border:top:1px solid #6B727C;
border:top:1px solid #575F6A;
position:relative;

}
nav ul ul li a
{
padding:5px 40px;
color:#fff;
}
nav ul ul li a:hover
{
background:#660000;
}
nav ul ul ul
{
position:absolute;
left:100%;
top:0px;
}
</style>
</head>
<body>
<nav>
<ul>
	<li><a href="index.php?menu=home" target="_parent">Home</a></li>
	<li><a href="#?menu=product" target="_parent">Upload Products</a>
		<ul>
			<li><a href="ingersol_rand.php" target="_parent">Ingersol Rand</a>
				<ul>
					<li><a href="upload_design.php?division=Air_Compressor_Solution" target="_parent">Air Compressor Solution</a></li>
					<li><a href="upload_design.php?division=ARO_Fluid_Products" target="_parent">ARO Fluid Products</a></li>
					<li><a href="upload_design.php?division=Tools" target="_parent">Tools</a></li>
					<li><a href="upload_design.php?division=Lifting_Material_Handling" target="_parent">Lifting Material Handling</a></li>
				</ul>
			</li>
			<li><a href="quality.php" target="_parent">SMC Pneumatics</a></li>
			<li><a href="quality.php" target="_parent">Omicron Instruments</a></li>
			<li><a href="quality.php" target="_parent">Hitachi Power Tools</a></li>
			<li><a href="quality.php" target="_parent">Esab Welding & Cutting</a></li>
		</ul>
	</li>
	<li><a href="#?menu=product" target="_parent">Display/Remove</a>
		<ul>
			<li><a href="#?menu=product" target="_parent">Ingersol Rand</a></li>
			<li><a href="quality.php" target="_parent">SMC Pneumatics</a></li>
			<li><a href="quality.php" target="_parent">Omicron Instruments</a></li>
			<li><a href="quality.php" target="_parent">Hitachi Power Tools</a></li>
			<li><a href="quality.php" target="_parent">Esab Welding & Cutting</a></li>
		</ul>
	</li>
	<li><a href="#?menu=product" target="_parent">Edit Products</a>
		<ul>
			<li><a href="#?menu=product" target="_parent">Ingersol Rand</a></li>
			<li><a href="quality.php" target="_parent">SMC Pneumatics</a></li>
			<li><a href="quality.php" target="_parent">Omicron Instruments</a></li>
			<li><a href="quality.php" target="_parent">Hitachi Power Tools</a></li>
			<li><a href="quality.php" target="_parent">Esab Welding & Cutting</a></li>
		</ul>
	</li>
	<li><a href="#" target="_parent">Logout</a></li>
	<li><a href="#" target="_parent"></a></li>
	<li><a href="#" target="_parent"></a></li>
</ul>
<nav>
</body>
</html>