<html>
<body bgcolor="yellow">
<center><hr><h1>LAST  MODIFIED DATE</h1></hr>
<form action=" " method="POST">

	<input type="file" name="str"><br>
	<input type="submit" method="click"><br><br>
<?php	
if(isset($_POST['str']))
{
$d=$_POST['str'];
global $d;
if(file_exists($d))
{
$lst_mod=filetime($d);
echo "last edited on";
echo " ".date("j/m/y/n:i",$lst_mod);
}
else
{
echo "The file does not exist";
}
}
?>
</center>
</form>
</body>
</html>