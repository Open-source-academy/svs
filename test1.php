<html>
<body bgcolor="blue">

<center><hr><h1>SETTING & RETRIVING COOKIES</hr></center>
<center><h2>
<?php
SETCOOKIE("name","D.Pavithra",time() +260);
SETCOOKIE("qualification","BSc",time() +260);
SETCOOKIE("DOB","23/03/1997",time() +260);
SETCOOKIE("hobby","music",time() +360);

if(isset($_COOKIE["name"]))
{
if(isset($_COOKIE["qualification"]))
{
if(isset($_COOKIE["DOB"]))
{
if(isset($_COOKIE["hobby"]))
{
echo "Your name is                   :".$_COOKIE["name"]."<br>";
echo "Your qualification is       :".$_COOKIE["qualification"]."<br>";
echo "Your date of birth is       :".$_COOKIE["DOB"]."<br>";
echo "Your hobby is                  :".($_COOKIE["hobby"])."<br>";
}
}
}
}?>
</center>
</body>
</html>