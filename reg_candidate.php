

<?php 
include 'connection.php';
if(isset($_POST['submit']))
{
$cname = $_POST['cname'];
//$photo= $_POST['cphoto'];
$pname =$_POST['pname'];
$cty =$_POST['cty'];
//$sym =$_POST['sym'];
$age =$_POST['age'];
$add =$_POST['add'];
$cont =$_POST['contrib'];

$photo = $_FILES['cphoto']['name'];
$sym= $_FILES['sym']['name'];
  	// Get text
  	

  	// image file directory
      $target = "cphotos/".basename($photo);
      $target2 = "symbols/".basename($sym);


  	if ((move_uploaded_file($_FILES['cphoto']['tmp_name'], $target) ) && (move_uploaded_file($_FILES['sym']['tmp_name'], $target2))) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
 $sql = "insert into candiates (id,cname,pname,address,const,age,cphoto,pphoto,contr) values
 ('','$cname','$pname','$add','$cty','$age','$photo','$sym','$cont')";


$result= $conn->query($sql);

?><script>alert("You have successfully registered");
	header("Location:welcomescreen.php");

</script><?php


}


?>