<?php
include 'connection.php';
?>
<form name="location" action="voting.php" method="POST">
<label>Select district:</label>
<select name="location" district="my list">
<option value="coimbatore">Coimbatore</option>
<option value="erode">Erode</option>
<option value="Nilgiris">Nilgiris</option>
<option value="Tirupur">Tirupur</option>
<option value="Thondamuthur">Thodamuthur</option>
<option value="Mettupalayam">Mettupalayam</option>

</select>
<input type="submit" name="submit" value="choose">