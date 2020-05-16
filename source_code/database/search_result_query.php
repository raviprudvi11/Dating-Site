<?php

require_once(dirname(__FILE__)."/connection.php");
error_reporting(E_ERROR | E_PARSE);
$querywink ="select * from user_table WHERE ".$searchType." LIKE '".$searchName."%' ";
$statement=$conn->prepare($querywink);
$statement->execute();
$result=$statement->get_result();
//var_dump($result);


?>