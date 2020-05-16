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
.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
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


</style>
</head>
<body>

<div class="icon-bar">
<a href="home.php"></=i>Home</i></a>
<a href="profile.php"><i>Profile</i></a>
    <a href="wink.php"><i>Wink</i></a>
    <a href="search.php"><i>Search</i></a>
    <a href="index.php"><i>Logout</i></a>
  </div>
<h2 style="text-align:center">User Profile Card</h2>
<div class="card">

<?php
  $_SESSION['valid']=true;
$favId=$_GET["user_id"];
if (isset($_POST['wink'])) {
$currentUserId= $_SESSION["user_id"];
require_once(dirname(__FILE__) . "/database/wink_inert_query.php");
}
echo "<form action='userInfo.php?user_id=".$favId ."' method='post'>";

 if(isset($_GET["user_id"])) {
     $userId=$_GET["user_id"];
    require_once(dirname(__FILE__) . "/database/profile_query.php");
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<img src="image/' . $row["user_id"] . '.jpg"';

            echo "Name :".$row["first_name"] . $row["last_name"]. "<br>" ."Age :". $row["age"]. "<br>" ."Email :". $row["email"]. "<br>" ."Pincode :". $row["postal_code"]. "<br>" ."Phone :". $row["phone"];
        }
     } else {
         echo "0 results";
     }
    }
    
     ?>
     </br>
      <button type="submit" name="wink" class="myButton">Wink</button>
</form>
</div>


</body>
</html>