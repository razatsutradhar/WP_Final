<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
//check if all the parameters are set
if (isset($_POST['login']) && isset($_POST['uname']) && isset($_POST['pword1']) && isset($_POST['pword2']) && isset($_POST['email'])) {
    //LOG IN to DB
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password1 = $_POST['pword1'];
    $password2 = $_POST['pword2'];

    $servername = "localhost";
    $susername = "rsutradhar1";
    $spassword = "rsutradhar1";
    $dbname = "rsutradhar1";
    $conn = new mysqli($servername, $susername, $spassword, $dbname);
    if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
        echo "FAILED TO CONNECT";
		exit();
	}

    
    $sql = "SELECT * FROM users WHERE username=\"" . $username."\";";
    $result = ($conn->query($sql))->fetch_all();
    var_dump($result);
    if (count($result) > 0) {
        header("location: ./userlogin.php?err=2");
    }

    if ($password1 != $password2) {
        header("location: ./userlogin.php?err=3");
    } else {
        $sql = "INSERT INTO users (username, password, email) VALUES (\"" . $username . "\", PASSWORD(\"" . $password1 . "\"), \"". $email ."\");";
        if ($conn->query($sql) === TRUE) {
            echo "New user successfully added";
        } else {
            echo "Error: New user failed to be saved";
        }

        if (!empty($_POST["remember"])) {
            setcookie("remember", $_POST["uname"], time() + 3600);
            setcookie("username", $_POST["uname"], time() + 3600);
            setcookie("password", $_POST["pword1"], time() + 3600);
        } else {
            setcookie("username", "");
            setcookie("password", "");
            setcookie("remember", "");
        }

        session_start();
        $_SESSION["user"] = $username;
        header("location: ./index.html");
    }
} else {
    header("location: ./userlogin.php");
}
