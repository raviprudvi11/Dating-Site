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
    .flex-container {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    img {
      border-radius: 5px 5px 0 0;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
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
  <div>
      <?php
      
        $_SESSION['valid']=true;
        $searchType="";
        $searchName="";
        if(isset($_POST['search_type'])){
          $searchType=$_POST['search_type'];
          $searchName=$_POST['search_value'];
        }

  echo "<form action='search.php?search=".$searchType ."' method='post'>";
  ?>
  <select name="search_type">
                    <option value="postal_code">Pincode</option>
                    <option value="first_name">Name</option>
                    <option value="gender">Gender</option>
                </select>
                <input type="text" name="search_value" placeholder="Search..">
                <button type="submit" name="wink" class="myButton">Search</button>
                <form>
</div>
  <div class="flex-container">
    <?php
      $current_user_id = $_SESSION['user_id'];
      //echo "HEREEE". $current_user_id ;
      $resultValue=null;
      if(isset($_POST['search_type'])){
        require_once(dirname(__FILE__) . "/database/search_result_query.php");
        $resultValue=$result;
        if ($resultValue->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
  
            echo '<div class="card">';
            echo '<a href="userInfo.php?user_id='.$row["user_id"] .'"><img src="image/' . $row["user_id"] . '.jpg"' . '  style="width:100%"></a>';
            echo '<div class="container">';
            echo '<h4><b>' . $row["first_name"] . $row["last_name"] . '</b></h4>';
            echo '<h5><b>'.  "Age :" . $row["age"];
            echo '</div>';
            echo '</div>';
          }
        } else {
          echo "0 results";
        }
      }
       
    
       
    ?>
  </div>
</body>
</html>