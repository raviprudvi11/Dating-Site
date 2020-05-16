<?php

require_once(dirname(__FILE__)."/connection.php");
$queryProfile ="select * from user_table";
$result = mysqli_query($conn, $queryProfile);


?>