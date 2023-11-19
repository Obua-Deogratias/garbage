<?php

    $database = new mysqli("localhost","root","","garbagegodb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }
?>
