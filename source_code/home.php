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
  <?php
  $userFlag = false;
  if(isset($_SESSION['valid'])){
    $userFlag = $_SESSION['valid'];
  }
  if (isset($_POST['register'])) {
    //echo ($_POST['first_name']);
    $firstName = ($_POST['first_name']);
    $lastName = ($_POST['last_name']);
    $age = ($_POST['age']);
    $phone = ($_POST['phone']);
    $email = ($_POST['email']);
    $pwd = ($_POST['password']);
    $pincode = ($_POST['sex']);
    $gender=($_POST['pincode']);
    require_once(dirname(__FILE__) . "/database/register_query.php");
    require_once(dirname(__FILE__) . "/database/get_login_data.php");
    if ($user->num_rows > 0) {
      while ($row = $user->fetch_assoc()) {
          $_SESSION["user_id"] = $row['user_id'];
          $userFlag = true;
      }
    } 
  } else if (isset($_POST['login'])) {
    $email = $_POST['email_login'];
    $pwd1 = $_POST['password_login'];
    require_once(dirname(__FILE__) . "/database/get_login_data.php");
    if ($user->num_rows > 0) {
      while ($row = $user->fetch_assoc()) {
        if (($row['email'] == $email) && ($row['password'] == $pwd1)) {
          $_SESSION["user_id"] = $row['user_id'];
          $userFlag = true;
        }
      }
    } 
  }


  ?>
  <div class="flex-container">

    <?php
    if ($userFlag) {
      $userId = $_SESSION['user_id'];
      require_once(dirname(__FILE__) . "/database/getProfiles.php");

      if (mysqli_num_rows($result)>0) {
        // output data of each row

        while ($row = mysqli_fetch_array($result)) {

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
    } else {
      echo "<script>
window.location.href='../dating/index.php';
alert('Invalid username or password');
</script>";
    }
    ?>
  </div>
</body>

</html>