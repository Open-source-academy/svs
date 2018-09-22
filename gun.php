<?php
if(isset($_POST['day']))
{
$d=$_POST['day'];
	if($d=="sunday")
	{
	$color="red";
	}
	else if($d=="monday")
	{
	$color="blue";
	}
	else if($d=="tuesday")
	{
	$color="black";
	}
	else if($d=="wednesday")
	{
	$color="pink";
	}
	else if($d=="thursday")
	{
	$color="yellow";
	}
	else if($d=="friday")
	{
	$color="green";
	}
	else if($d=="saturday")
	{
	$color="orange";
	}
else
{
$color="white";
}

}?>
<html>
<body bgcolor="<?php
if(isset($color))
{
echo $color;
}
?>">
<center><b><u>D.Pavithra</u></b></center>
<center><b><u>15BCT026</u><b></center>
<center><b><h1>Days in a week</h1>
<font type="cosmic sans ms">
<form action " " method="post">
Enter the day<input type="text" name="day"><br><br>
<input type="submit"<value="display"><br><br>
<?php
echo "<br>";
echo date("d-m-y");
?>
</font>
</center>
</form>
</body>
</html>
