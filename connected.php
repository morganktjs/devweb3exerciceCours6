<?php
    if(isset($_SESSION["isConnected"]))
    {
        echo("Vous êtes connecté");
    }
    else
    {
        header('Location: /index.php');
    }
?>