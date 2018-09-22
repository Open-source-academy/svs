<?php
include 'connection.php';
$sql ="SELECT * FROM `candiates` ORDER BY `candiates`.`vote` DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
		// output data of each row
		?>
				<form action="" method="post" name="del">
					<?php echo "<table><tr><th>Candidate id</th><th>Photo</th><th>Name</th><th>Symbol</th><th>Party Name</th><th>Total Votes</th></tr>";
						while($row = mysqli_fetch_assoc($result)) 
							{?>
			  
								<tr><td> <?php echo $cid = $row["id"];  ?> </td>
                                <td> <img src="cphotos/<?php echo $row["cphoto"]?>" width="50" /> </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["cname"];  ?>"  readonly="readonly"/> </td>
                                <td> <img src="symbols/<?php echo $row["pphoto"]?>" width="50" />  </td>
                                <td> <input type="text" name="qid[]" value="<?php echo $row["pname"];  ?>"  readonly="readonly"/> </td>
                                <td> <input type="text" name="" value="<?php echo $row["vote"];?>"  disabled /> </td>
                                </tr>
                            <?php }

                            }?>