<?php

include('config.php');
$name= $_GET['name'];
mysqli_query($con, "DELETE FROM t_client WHERE name=$name");
header('location: client.php')

?>