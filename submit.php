<?php
include 'connection.php';
$id = $_GET['id'];
$sql ="select * from candiates where id ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	while($row = mysqli_fetch_assoc($result)) 
	{

     $vote = $row['vote'];
    }
            echo  $vote = $vote +1;
              
              $sql = "update candiates set vote = '$vote' where id ='$id';";
              $result = $conn->query($sql);

              ?>
<script>
alert("Thank you! your vote has been record");
window.location.assign("choose-location.php");
</script>
              <?php
}
?>
