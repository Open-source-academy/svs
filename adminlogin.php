 <html>
<style>
form
input[type=text],input [type==password]
{
width:100%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:10px solid #ccc;
box-sizing:border-box;
}
button
{
background-color:#4CAF50;
color:white;
padding:14px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width:20%;
}

.cancelbtn
{
width:auto;
padding-10px 18px;
background-color:#f44336;
}
.container
{
padding-right:25px;
}
span.psw
{
float:right;
padding-top:16px;
}
@media screen and (max_width:100px)
{
span.psw{
display:block;
float:none;
}
.cancelbtn{
width:100%;
}
}
</style>

<?php 

$err_msg ="";

if(isset($_POST['submit']))
{
	$uname=$_POST['Uname'];
	$pass=$_POST['Pass'];
	
	

if ($uname =="admin" && $pass = "admin123") {
    session_start();
    $_SESSION['uname'] = $uname;
		header("Location:welcomescreen.php");
	}else 
	{
		$err_msg="Invalid user name or password";
	}
}

?>
<body bgcolor="blue">
<center><h1>Login Form</h1></center>
<form action="#" method="POST">
</div><br><br><br>
<center><img src="admin.jpg" width="104" height="142"></center><br>

<div class="container">
<center><label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="Uname" required><br><br></center>

<center><label><b>password</b></label>
<input type="password" placeholder="Enter password" name="psw" required><br></center><br>
<center><input type="submit" name ="submit" value ="Login"></center>




<div class="container" style="background-color:blue">

<?php echo $err_msg; ?>

</div>
</div>
</form>
</body>
</html>
