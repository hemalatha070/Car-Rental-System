<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost','root','hemaG@0705','carproject');
    if(!$con)
    {
        die( 'please check your Database connection'. mysqli_connect_error());
    }







?>
