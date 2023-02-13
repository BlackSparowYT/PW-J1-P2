<?php

    // Webhost Database Login, User has only read perms for the required tables!        

    $user = 'blackspa_portfolio';
    $password = 'OFLs}2J(o#jz';
    $database = 'blackspa_portfolio';
    $servername = '116.202.134.139';
    $link = new mysqli($servername, $user, $password, $database);

    if (!$link){
        echo "<p style='color: red;'>Connection Unsuccessful!!!</p>";
    }

?>