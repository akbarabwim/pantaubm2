<?php
$con=mysqli_connect("localhost", "root", "") or die (mysqli_error());
mysqli_select_db($con,"db_kas") or die (mysqli_error());
?>