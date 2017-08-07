<?php

   
        $dbuser="root";
    $dbpass="";
    $dbdatabase="db";
    $dbhost="localhost";

    $dbconn=  mysqli_connect($dbhost, $dbuser, $dbpass,$dbdatabase);

    if($dbconn)//connection to db 
    {
        mysqli_select_db($dbconn, $dbhost);
        echo "<center>successful</center>";
    }
    else
    {
        die("<strong>error:</strong> Could not connect to database");
    }

    
?>
