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
$color="yellow";
}
else if($d=="tuesday")
{
$color="green";
}
else if($d=="thursday")
{
$color="blue";
}
else if($d=="friday")
{
$color="silver";
}
else if($d=="saturday")
{
$color="aqua";
}
else
{
$color="white";
}
}
?>

<html>
<body bgcolor="<?php
if(isset($color))
{
echo $color;
}
?>">
<center><b><u>D.Pavithra</u></b></center>
<center><b><u>15BCT026</u></b></center>
<center><b><h1>Days is a Week</h1></b></center>

<font type="cosmic sans ms">
<form action" " method="post">
<center>Enter the day<input type="text" name="day"></center><br><br>
<center><input type="submit" value="display"></center><br><br>
<?php
echo "<br>";
echo date("d-m-y");
?>
</font>
</center>
</form>
</body>
</html>