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
padding:0 78px;
border-radius:0px;
list-style:none;
position:relative;
display:inline-table;
/*margin-top:15px;*/
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
	<li><a href="../index.php?menu=home" target="_parent">Home</a></li>
	<li><a href="#?menu=about" target="_parent">About US</a></li>
	<li><a href="#" target="_parent">Products</a>
		<ul>
			<li><a href="#" target="_parent">Ingersol Rand</a>
				<ul>
					<li><a href="air_compressor_solutions.php" target="_parent">Air Compressor Solution</a></li>
					<li><a href="http://www.arozone.com/en.html" target="_blank">ARO Fluid Products</a></li>
					<li><a href="air_electric_tools.php" target="_parent">Tools</a></li>
					<li><a href="lifting_material_handling.php" target="_parent">Lifting Material Handling</a></li>
				</ul>
			</li>
			<li><a href="#" target="_parent">SMC Pneumatics</a>
				<ul>
					<li><a href="http://www.smcworld.com/products/en/" target="_blank">Web Catalog</a></li>
					<li><a href="http://www.smcworld.com/newproducts/en/" target="_blank">New Products</a></li>
					<li><a href="http://www.smcworld.com/pg/en/search.do?ca_id=&kw=&off=0" target="_blank">Specialized Products</a></li>
					<li><a href="http://www.smcworld.com/select_guide/en/" target="_blank">Product Selection Guide</a></li>
					<li><a href="http://www.smcworld.com/solutions/en/" target="_blank">Solution by Theme</a></li>
					<li><a href="http://www.smcworld.com/theme_catalog/en/" target="_blank">Subject/Industry Classified</a></li>
				</ul>
			</li>
			<li><a href="http://www.omicron.in/products.html" target="_blank">Omicron Instruments</a></li>
			<li><a href="#" target="_parent">Hitachi Power Tools</a>
				<ul>
					<li><a href="http://www.hitachi-koki.in/Dynamiclist_OPE.aspx" target="_blank">Outdoor Power Equipment</a></li>
					<li><a href="http://www.hitachi-koki.in/Dynamiclist.aspx" target="_blank">Power Tools</a></li>
				</ul>
			</li>
			<li><a href="#" target="_parent">Esab Welding & Cutting</a>
				<ul>
					<li><a href="http://www.esabindia.com/products/welding_consumables/carbon_steel_electrodes.htm" target="_blank">Welding Consumables</a></li>
					<li><a href="http://www.esabindia.com/products/reclamation/conventional_hardfacing_alloys/buffering.htm" target="_blank">Reclamation Consumables</a></li>
					<li><a href="http://www.esabindia.com/products/arc_quipments/mma/ac/transweld_400.htm" target="_blank">Arc Equipments</a></li>
					<li><a href="http://www.esabindia.com/products/gas_equipment/product_catalouge/process_description.htm" target="_blank">Industrial Gas Equipments</a></li>
					<li><a href="http://www.esabindia.com/products/cutting_systems/profile_cutting_machines.htm" target="_blank">Cutting Systems</a></li>
					<li><a href="http://www.esabindia.com/products/welding_automation/thyristorised_saw_power_sources_dc_29.htm" target="_blank">Welding Automation</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="../service.php" target="_parent">Service</a></li>
	<li><a href="../gallery.php" target="_parent">Gallery</a></li>
	<li><a href="../contact.php" target="_parent">Contact Us</a></li>
</ul>
<nav>
</body>
</html>