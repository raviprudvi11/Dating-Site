<?php

require_once(dirname(__FILE__)."/connection.php");
$queryProfile ="select * from user_table where user_id=?";
$statement=$conn->prepare($queryProfile);
$statement->bind_param("i",$userId);
$statement->execute();
$result = $statement->get_result();
//var_dump($result);


?>



