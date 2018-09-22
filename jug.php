<html>
<style>
form
{
border:3px solid #f1f1f1;
}

input[type=text],input [type==password]
{
width:100%;
padding:12px 20px;
margin:80px 0;
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
button:hover
{
opacity:0.8;
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
<body>
<h2>Login Form</h2>
<form>
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
