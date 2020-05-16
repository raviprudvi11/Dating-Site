<!DOCTYPE html>
<html>

<title>Welcome </title>

<head>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <meta name="Description" content=">Welcome to Mix And Match" />
</head>

<body>

    <div class="app-header">
        <form action="home.php" method="post">
            <div id="img1" class="app-header"><img src="image/logo.png" /></div>
            <div id="form1" class="app-header">Email or Phone<br>
                <input placeholder="Email" type="mail" name="email_login" /><br>
                <select name="user_type">
                    <option value="limited">Limited</option>
                    <option value="regular">Regular</option>
                    <option value="premium">Premium</option>
                </select></div>

            <div id="form2" class="app-header">Password<br>
                <input placeholder="Password" type="password" name="password_login" /><br>
            </div>
            <button type="submit" name="login" class="submit1">Login</button>
        </form>
    </div>
    </div>
   
    <div class="app-body">
        <div id="intro1" class="app-body">We make online dating simple. We are the online dating shortcut that gets you more dates with attractive people!</div>
        <div id="intro2" class="app-body">Register your account</div>
        <div id="img2" class="app-body"><img src="image/welcome.png" /></div>
        <div id="intro3" class="app-body">Find your match today!.</div>
        <div id="form3" class="app-body">
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
                <p id="intro4">By clicking Register,Your profile will be created and you can start finding your match.</p>
                <button type="submit" class="myButton" name="register">Register</button>
                <br>
                <hr>
            </form>


        </div>

    </div>

</body>

</html>