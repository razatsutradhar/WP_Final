
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $servername = "localhost";
    $susername = "rsutradhar1";
    $spassword = "rsutradhar1";
    $dbname = "rsutradhar1";
    $conn = new mysqli($servername, $susername, $spassword, $dbname);
    if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

    $username = $_POST['uname'];
    $password = $_POST['pword1'];

    $sql1 = "SELECT * FROM users WHERE username=\"" . $username . "\" AND password=PASSWORD(\"".$password."\");";
    $result = ($conn->query($sql1))->fetch_all();

    if (count($result) > 0) {
        session_start();
        if(!empty($_POST["remember"])) {
            setcookie ("remember",$_POST["uname"],time()+ 3600);
            setcookie ("username",$_POST["uname"],time()+ 3600);
            setcookie ("password",$_POST["pword1"],time()+ 3600);

        } else {
            setcookie("username","");
            setcookie("password","");
            setcookie ("remember","");
        }
        $_SESSION["user"] = $username;
        header("location: ./index.html");
    }else{
        header("location: ./userlogin.php?err=1");
        echo "failed to find user";
    }

?>
</body>
</html>