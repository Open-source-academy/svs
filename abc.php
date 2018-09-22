<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo_table">
<?php if(!empty($success_message))
//{?>
<div class="success-message"><?php if(isset($success_message)) echo $success_message;
?>
</div>
//<?php}?>

<?php if(!empty($error_message))
//{?>
<div class="error-message"><?php if(isset($error_message)) echo $error_message;
?>
</div>
//<?php}?>

<td>User Name</td>
<td><input type="text" class="demoInputBox"name="userName" value="<?php
if(isset($_POST['userName'])) echo $_POST['userName'];?>"></td>
</tr>

<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox"name="FirstName" value="<?php
if(isset($_POST['FirstName'])) echo $_POST['FirstName'];?>"></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" class="demoInputBox"name="password" value=""></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox"name="Confirm_Password" value=""></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male"<?php if(isset($_POST['gender'])&& $_POST['gender']=="male")
{?>checked<?php}?>>Male
<input type="radio" name="gender" value="Female"<?php if(isset($_POST['gender'])&& $_POST['gender']=="Female")
{?>checked<?php}?>>Female
</td>
</tr>

<tr>
<td colspan=2><input type="checkbox" name="terms">I accept Terms and Condition<input type="submit" name="register-user"value="Register"class="btnRegister"></td>
</tr>
</table>
</form>

                                                                                                                                                                                                                                                                                                                                                                                                                                          