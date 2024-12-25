<?php

    $database= new mysqli("localhost","root","","database_nimh");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>