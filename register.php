<?php
    //check if all the parameters are set
    if(isset($_POST['login']) && isset($_POST['uname']) && isset($_POST['pword1']) && isset($_POST['pword2']) && isset($_POST['email']) ){
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password1 = $_POST['pword1'];
        $password2 = $_POST['pword2'];

        // if()
        
        
        $txtFile = fopen('./users.txt','r');
        $allUsers = array();
        while ($line = fgets($txtFile)) {
            $entry = explode(",", $line);
            $allUsers[$entry[0]] = $entry[1];
        }
        fclose($txtFile);
        if($password1 != $password2){
            header("location: ./userlogin.php?err=3");
        }else if(array_key_exists($username, $allUsers)){
            header("location: ./userlogin.php?err=2");
        }else{
            $fp = fopen('./users.txt', 'a');
            fwrite($fp, "\n".$username.','.$password1);  
            fclose($fp);  

            if(!empty($_POST["remember"])) {
                setcookie ("remember",$_POST["uname"],time()+ 3600);
                setcookie ("username",$_POST["uname"],time()+ 3600);
                setcookie ("password",$_POST["pword1"],time()+ 3600);
    
            } else {
                setcookie("username","");
                setcookie("password","");
                setcookie ("remember","");
    
            }

            session_start();
            $_SESSION["user"] = $username;
            header("location: ./myboard.php");
        }   
    }else{
        header("location: ./userlogin.php");
    }
?>