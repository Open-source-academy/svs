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

<td>Aadhar ID</td>
<td><input type="text" class="demoInputBox"name="AadharID" value="<?php
if(isset($_POST['AadharID'])) echo $_POST['AadharID'];?>"></td>
</tr>

<tr>
<td>Voter ID</td>
<td><input type="text" class="demoInputBox"name="VoterID" value="<?php
if(isset($_POST['VoterID'])) echo $_POST['VoterID'];?>"></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" class="demoInputBox"name="Name" value="<?php
if(isset($_POST['Name'])) echo $_POST['Name'];?>"></td>
</tr>

<tr>
<td>Fathername</td>
<td><input type="text" class="demoInputBox"name="Fathername" value="<?php
if(isset($_POST['Fathername'])) echo $_POST['Fathername'];?>"></td>
</tr>

<tr>
<td>Contact Number</td>
<td><input type="text" class="demoInputBox"name="ContactNumber" value="<?php
if(isset($_POST['ContactNumber'])) echo $_POST['ContactNumber'];?>"></td>
</tr>

<tr>
<td>DOB</td>
<td><input type="text" class="demoInputBox"name="DOB" value="<?php
if(isset($_POST['DOB'])) echo $_POST['DOB'];?>"></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" class="demoInputBox"name="Address" value="<?php
if(isset($_POST['Address'])) echo $_POST['Address'];?>"></td>
</tr>

<tr>
<td>PinCode</td>
<td><input type="text" class="demoInputBox"name="PinCode" value="<?php
if(isset($_POST['PinCode'])) echo $_POST['PinCode'];?>"></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox"name="Email" value="<?php
if(isset($_POST['Email'])) echo $_POST['Email'];?>"></td>
</tr>

<tr>
<td>UserName</td>
<td><input type="text" class="demoInputBox"name="UserName" value="<?php
if(isset($_POST['UserName'])) echo $_POST['UserName'];?>"></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" class="demoInputBox"name="password" value=""></td>
</tr>



<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male"<?php if(isset($_POST['gender'])&& $_POST['gender']=="male")
//{?>checked<?php}?>>Male
<input type="radio" name="gender" value="Female"<?php if(isset($_POST['gender'])&& $_POST['gender']=="Female")
//{?>checked<?php}?>>Female
</td>
</tr>

<tr>
<td colspan=2><input type="checkbox" name="terms">I accept Terms and Condition<input type="submit" name="register-user"value="Register"class="btnRegister"></td>
</tr>
</table>
</form>

                                                                                                                                                                                                                                                                                                                                                                                                                                          
