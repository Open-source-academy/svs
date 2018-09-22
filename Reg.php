<html>
<head>
<title>Display output</title>
</head>
<body>
<?php
$name=$_POST['name'];
$address=$_POST['address'];
$birth_month=$_POST['birth_month];
$birth_day=$_POST[birth_day];
$birth-year=$_POST[birth_year];
$gender=$_POST['gender'];
$pop=$_POST['pop'];
$jazz=$_POST['jazz'];
$rock=$_POST['rock'];
$metal=$_POST['metal'];
$instrumental=$_POST['instrumental'];

if($gender=='M')
{
echo "Mr.";
}
else if($gender=='F')
{
echo "Ms.";
}
echo" ",$name;
?>!You have entered the following information:</h2>
<table border="1">
<tr>
<td>Address</td>
<td>
<?php echo $address;?>
</td>
</tr>
<tr>
<td colspan=2>you prefer listening to:
<?php
if(!(empty($pop)))
{
if($pop==1)
{
echo "pop";
}
}

if(!(empty($jazz)))
{
if($jazz==1)
{
echo "jazz";
}
}

if(!(empty($rock)))
{
if($rock==1)
{
echo "rock";
}
}

if(!(empty($instrumental)))
{
if($instrumental==1)
{
echo "instrumental";
}
}

if(!(empty($metal)))
{
if($metal==1)
{
echo "metal";
}
}
?>
</td>
</tr>

</table>
</body>
</html>