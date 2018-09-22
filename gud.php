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
<body bgcolor="blue">
<center><h1>Login Form</h1></center>
<form>
</div><br><br><br>

<div class="container">
<center><label><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="Uname"required><br><br></center>

<center><label><b>password</b></label>
<input type="password" placeholder="Enter password" name="psw"required><br></center><br>
<center><button type="submit">Login</button></center>


<div class="container" style="background-color:blue">
<center><button type="button" class="cancelbtn">Cancel</button></center>

</div>
</div>
</form>
</body>
</html>
