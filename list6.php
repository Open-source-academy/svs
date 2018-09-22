<!DOCTYPE>
<html>
<body bgcolor="aqua">
<center><h1><hr>LAST  MODIFIED DATE<hr></h1>
<form action=" " method="POST">
<input type="file" name="str"><br><br>
<input type="submit" value="submit"><br>
<?php
if(isset($_POST['str']))
{
$d=$_POST['str'];
global $d;
	if(file_exists($d))
	{
	$lst_mod=filemtime($d);
	echo "last edited on";
	echo" ".date("j/m/y/n :i",$lst_mod);
	}
	else
	{
	echo "file does not exist";
	}
}
?>
</center></form>
</body>
</html>