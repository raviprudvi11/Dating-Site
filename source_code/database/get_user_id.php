<?php

require_once(dirname(__FILE__)."/connection.php");
$queryUserID ="select user_id from user_table where email=?";
$statement=$conn->prepare($queryUserID);
$statement->bind_param("s",$email);
$userId=$statement->execute();
var_dump($userId);
?>