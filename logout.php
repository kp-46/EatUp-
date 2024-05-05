<?php   session_start();
        $_SESSION["user_Name"]="";
        $_SESSION["user_Pass"]="";
        $_SESSION["user_Id"]="";
        header("location:index.php");
        exit;
?>