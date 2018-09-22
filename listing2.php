<html>
<body bgcolor="red">
<font color="white">
<left><h1><hr>D.Pavithra---15BCT026</hr></h1></left>
<center><h1><hr>Random numbers<hr></h1>
<form action=" " method="get">
Enter starting value<br><input type="text"  name="start"><br><br>
Enter ending value<br><input type="text"  name="end"><br><br>

<input type="submit" value="pick random">
<font color="white">
<?php global $x;
if(isset($_GET['start'])&&($_GET['end']))
$x=rand($_GET['start'],$_GET['end']);
echo "<br>";
echo "<h2>Your random number picked is<br></h2>".$x;
echo "<br>";
?>
</form>
</center>
</font>
</body>
</html>