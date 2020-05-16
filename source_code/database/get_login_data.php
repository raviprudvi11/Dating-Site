<?php
require_once(dirname(__FILE__)."/connection.php");
$queryUser ="select * from user_table where email=?";
$statement=$conn->prepare($queryUser);
$statement->bind_param("s",$email);
$statement->execute();
$user=$statement->get_result();
//var_dump($user);
?>