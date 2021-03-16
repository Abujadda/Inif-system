<?php  
    $inif = mysqli_connect("localhost","root","","inif_db");

    if($inif){
        echo 'Connected';

    }
    else
    echo 'Not connected';
?>