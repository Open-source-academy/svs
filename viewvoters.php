<?php
include 'connection.php';
$sql ="select * from voter_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
		// output data of each row
		?>

         
				<form action="" method="post" name="del">
					<?php echo "<table><tr><th>Voter id</th><th>Adhar Number</th><th>Voter Name</th><th>Gender</th><th>City</th><th>Ward</th><th>Mobile No</th></tr>";
						while($row = mysqli_fetch_assoc($result)) 
							{?>
			  
								<tr><td> <?php echo $vid = $row["VoterID"];  ?> </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["Adhar_num"];  ?>"  readonly="readonly"/> </td>
                                   <td> <input type="text" name="qid[]" value="<?php echo $row["voter_name"];  ?>"  readonly="readonly"/> </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["gender"];  ?>"  readonly="readonly"/> </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["city"];  ?>"  readonly="readonly"/> </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["ward"];  ?>"  readonly="readonly"/> </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["mobile"];  ?>"  readonly="readonly"/> </td>
                                
                                </tr>
                            <?php }

                            }?>