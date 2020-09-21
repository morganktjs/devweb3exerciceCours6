<?php
    if($_POST["account"] = strrev($_POST["password"]))
    {
        session_start();
        $_SESSION["isConnected"] = true;
        header('Location: /connected.php');
    }
    else
    {
        header('Location: /error.php');
    }
?>