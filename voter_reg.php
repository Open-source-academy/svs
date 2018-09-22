<?php 
include 'connection.php';
if(isset($_POST["submit"]))
{
$aid= $_POST["aid"];
$name =$_POST["name"];
$fname =$_POST["fname"];
$mob =$_POST["mob"];
$gender =$_POST["gender"];
$email = $_POST["email"];
$add =$_POST["adrs"];
$ward =$_POST["ward"];
$const =$_POST["const"];
$city = $_POST["city"];
$uname = $_POST["uname"];
$pass=$_POST["pass"];
$dob =$_POST["dob"];
$pin =$_POST["pincode"];

echo $sql = "insert into voter_details (VoterID,Adhar_num,voter_name,fathername,address,gender,dob,city,const,ward,mobile,email,uname,pass,voter_photo
) values ('','$aid','$name','$fname','$add','$gender','$dob','$city','$const','$ward','$mob','$email','$uname','$pass','')";
$result= $conn->query($sql);

?><script>alert("You have successfully registered");
windows.location('index.php');

</script><?php


}



?>

