<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  border-radius: 5px;
}

.title {
  color: grey;
  font-size: 18px;
}

img {
  border-radius: 5px 5px 0 0;
  max-width: 300px;
}
button:hover, a:hover {
  opacity: 0.7;
}

.myButton {
	box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #599bb3 5%, #408c99 100%);
	background-color:#599bb3;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:linear-gradient(to bottom, #408c99 5%, #599bb3 100%);
	background-color:#408c99;
}
.myButton:active {
	position:relative;
	top:1px;
}
.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
.flex{
  display: flex;
}
}
</style>
</head>
<body>
<div class="card">
<img src="<?=$_SESSION['user']?>" alt="">
<form action="home.php" method="post">
                <input placeholder="First Name" type="text" id="namebox" name="first_name" />
                <input placeholder="Last Name" type="text" id="namebox" name="last_name" /> <br>
                <input placeholder="Age" type="text" id="namebox" name="age" /><br>
                <input placeholder="Phone" type="text" id="namebox" name="phone" /><br>
                <input placeholder="Email" type="text" id="mailbox" name="email" /><br>
                <input placeholder="Password" type="password" id="mailbox" name="password" /><br>
                <input placeholder="Pincode" id="namebox" name="pincode" /><br><br>
                <input type="radio" id="r-b" name="sex" value="male" name="gender" />Male
                <input type="radio" id="r-b" name="sex" value="female" name="gender" />Female<br><br>
                <button type="submit" class="myButton" name="register">Save Profile</button>
                <br>
                <hr>
            </form>
</div>

</body>
</html>