<?php

require_once(dirname(__FILE__)."/connection.php");
$queryRegisterInsert ="insert into wink_table(user_id,wink_user_id) values(?,?)";
$statement=$conn->prepare($queryRegisterInsert);
$statement->bind_param("ii",$currentUserId,$favId);
$result=$statement->execute();
//var_dump($result);

?>













