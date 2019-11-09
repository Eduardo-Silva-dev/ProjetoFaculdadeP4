<?php
    $host = "localhost";
    $bd = "dash";
    $user = "root";
    $psswd = "";

    $con =  new mysqli($host, $user, $psswd, $bd);
    if($con){
        
    }else{
       echo "Failed to connect to MySQL: " . mysqli_connect_error() ;
     }

?>