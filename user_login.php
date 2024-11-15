<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Alfa Pneumatic</title>
<!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />-->
<!--<meta name="description" content="After serving and delivering the vast market of WPC (wood plastic composite), AVS Industry (ado woods) launched a new digital revolutionary products range under “Ado Surface” having strategic partnership with “Yashvi Agro Industries Pvt. Ltd.” "/>
<meta name="keywords" content="Digi Doors, Digi Stone Dices, WPC, Glass, ACP panels, Mdf, Sunboard, Ply board, Ceramic tiles, Acrylic sheet, Metal sheet, Laminates, Sunmika, Wall panels, Pillar cladding, Flooring, Ceiling, Doors and Partitions, Glass panels, Schools and Institutions, Kitchen glass tile and cabinet, Bathroom wall tiles, Indoor skylights, Art pieces, Furniture   WPC Door Frames, Lift lobbies / lift interiors"/>
-->
</head>
<body>
<div style="height:200px; width:300px; border:1px solid; background-color:#efefef;">
<form action="user_login.php?id=user_login" method="post">
<table width="300">
<tr><td colspan="2" align="center">User Login</td></tr>
<tr><td>User Id</td><td><input type="text" name="uid" /></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd" /></td></tr>
<tr><td><input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>
</div>
<?php
if($_REQUEST['submit']=='Submit')
{
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$conn=mysql_connect("localhost","root","");
	if(!$conn)
		{die("Could Not Connect".mysql_error());}
	mysql_select_db('alfapneumatic');
	$res=mysql_query("select * from user_record",$conn);
	while($r=mysql_fetch_array($res))
	{
		if($uid==$r['uid'] && $pwd==$r['pwd'])
		{
			header("location:users/user_home.php?uid='".$uid."'");
		}
		else
		{
			header("location:index.php");
		}
	}
}
?>
</body>
</html>
