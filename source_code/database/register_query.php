<?php

require_once(dirname(__FILE__)."/connection.php");
$queryRegisterInsert ="insert into user_table(first_name,last_name,age,phone,email,password,gender,postal_code) values(?,?,?,?,?,?,?,?)";
$statement=$conn->prepare($queryRegisterInsert);
$statement->bind_param("ssiissss",$firstName,$lastName,$age,$phone,$email,$pwd,$pincode,$gender);
$result=$statement->execute();
//var_dump($result);

?>