<html>
<style>
/*Bordered form*/

	form
	{
	border:3px solid #00008B;
	}
/*full-width inputs*/
	input[type=text],input [type==password]
	{
	width:100%;
	padding-left:12px 20px;
	margin:8px 0;
	display:inline-block;
	border:1px solid #ccc;
	box-sizing:border-box;
	}

/*set a style for all buttons*/
	button
	{
	background-color:#4CAF50;
	color:white;
	padding:14px 20px ;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:20%;
	}
/*Add a hover effect for buttons*/
	button:hover
	{
	opacity:0.8;
	}
/*Extra style for the cancel button*/
	.cancelbtn
	{
	width:auto;
	padding-14px 20px 44px 62px ;
	background-color:#f44336;
	}
/*Center the avatar image inside this container*/
	.imgcontainer
	{
	text_align:center;
	margin:24px 0 12px 0;
	}
/*Avatar image*/
	img.avatar
	{
	width:40%;
	border_radius:50%;
	}
/*Add padding to containers*/
	.container
	{
	padding:16px;
	}
/* Change styles for span and cancel button on extra small screens*/
	@media screen and (max_width:300px)
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
<body>
<h2>Login Form</h2>
<form action="/action_page.php" >
<div class="imgcontainer">
<img src="img_avatar2.png" alt="Avatar" class="avatar">

</div>

<div class="container">
<label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="Uname"required><br><br>

<label><b>passsword</b></label>
<input type="password" placeholder="Enter password" name="psw"required><br>
<button type="submit">Login</button>

</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" class="cancelbtn">Cancel</button>


</div>
</form>
</body>
</html>