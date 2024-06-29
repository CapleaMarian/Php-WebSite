<?php
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    setcookie("username","", time() -3600,);
    setcookie("password","", time() -3600,);
    session_destroy();
    header('Location: index.php');
?>