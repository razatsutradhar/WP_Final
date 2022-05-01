<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./style.css" , rel="stylesheet">

</head>

<body>
    <div class="topnav">
        <a href="./index.html">Home</a>
        <a href="./aboutus.html">About</a>
        <a class="active" href="./userlogin.php">Login</a>

    </div>
    <?php
    // include(dirname(__DIR__).'/login.php');
    // include(dirname(__DIR__).'/register.php');
    $errors = array(
        1 => "Incorrect Username/Password",
        2 => "Username Taken",
        3 => "Passwords do not match"
    );

    ?>
    <h2 class="center2 logo">PropertyHub</h2>
    <div class="landing">
        <div class="login">
            <p><?php $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
                if ($error_id != 0 && array_key_exists($error_id, $errors)) {
                    echo $errors[$error_id];
                }
                ?></p>
            <h1 class="center3">Login</h1>
            <form action="./login.php" method="post">
                <label for="uname">Username:</label><br>
                <input type="text" id="uname" name="uname" value="<?php if (isset($_COOKIE["username"])) {
                                                                        echo $_COOKIE["username"];
                                                                    } ?>"><br><br>
                <label for="pword1">Password:</label><br>
                <input type="password" id="pword1" name="pword1" value="<?php if (isset($_COOKIE["password"])) {
                                                                            echo $_COOKIE["password"];
                                                                        } ?>"><br><br>
                <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["remember"])) {
                                                                            echo "checked";
                                                                        } ?> />
                <label for="remember">Remember Me</label><br><br>

                <input type="submit" value="Submit" name="login">
            </form>
            <br>
            <hr class="divider">
            <h2 class="center3">Create An Account</h2>
            <form action="./register.php" method="post">
                <label for="uname">Username:</label><br>
                <input type="text" id="uname" name="uname" value=""><br><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" value=""><br><br>
                <label for="pword1">Password:</label><br>
                <input type="password" id="pword1" name="pword1" value=""><br><br>
                <label for="pword2">Confirm Password:</label><br>
                <input type="password" id="pword2" name="pword2" value=""><br><br>
                <input type="checkbox" name="remember" id="remember" />
                <label for="remember">Remember Me</label><br><br>
                <label for="isVendor">Are you a vendor?</label><br><br>
                <label class="switch">
                    <input type="checkbox" name="isVendor" id="isVendor">
                    <span class="slider round"></span>
                </label><br><br>



                <input type="submit" value="Submit" name="login" id="login">
            </form>
            <br>
        </div>
    </div>


</body>

</html>