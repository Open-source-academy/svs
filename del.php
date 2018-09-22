
<?php
include 'connection.php';
$cid = $_GET['id'];
$sql ="delete from candiates where id ='$cid'";
$result = $conn->query($sql);
{
echo "Candidate removed successfully";

}


?>