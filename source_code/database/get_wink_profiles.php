
<?php

require_once(dirname(__FILE__)."/connection.php");
$querywink ="select * from user_table, wink_table WHERE wink_table.user_id=".$current_user_id." and user_table.user_id = wink_table.wink_user_id";
$statement=$conn->prepare($querywink);
$statement->execute();
$result=$statement->get_result();
//var_dump($result);

?>