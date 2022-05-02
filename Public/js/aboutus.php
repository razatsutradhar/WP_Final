<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/style.css" , rel="stylesheet">
    <link href="../css/buy.css" , rel="stylesheet">

</head>

<body>
    <nav class="navbar"></nav>

    <h4 class="center4">LIST AND SELL YOUR PROPERTY</h4>

    <p class="white-text">PropertyHub is a place where slef employed entrepenuers can buy and sell their products. </p>
</body>
<?php
if (isset($_SESSION["user"])) {
    echo "<script src=\"navLoggedIn.js\"></script>";
} else {
    echo "<script src=\"nav.js\"></script>";
}
?>
<script src="index.js"></script>

</html>