
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './serverInfo.php';?>

</head>
<body>
    <?php
    $conn = new mysqli($servername, $susername, $spassword, $dbname);
    if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

    $username = $_POST['uname'];
    $password = $_POST['pword1'];

    $sql1 = "SELECT * FROM users WHERE username=\"" . $username . "\" AND password=PASSWORD(\"".$password."\");";
    $result = ($conn->query($sql1))->fetch_all();
    $conn->close();
    if (count($result) > 0) {
        var_dump($result);
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

        //buyer
        if($result[0][3] == "0"){
            header("location: ./buyer.php");

        //seller
        }else if($result[0][3] == "1"){
            header("location: ./seller_main.php");

        //admin
        }else if($result[0][3] == "2"){
            header("location: ./index.php");
        }else{
            header("location: ./index.php");
        }
        echo $_SESSION["user"];
    }else{
        header("location: ./userlogin.php?err=1");
        echo "failed to find user";
    }

?>
</body>
</html>