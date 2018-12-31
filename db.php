<?php

    $dbhost = 'sql207.byethost.com';
    $dbuser = 'b5_23224205';
    $dbpass = 'synkh@18';
    $dbname = 'b5_23224205_wishes';

    $con=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) //connect to the database server
    or die ("Could not connect to mysql because ".mysqli_error());
    mysqli_query($con, "SET NAMES 'utf8'");
    mysqli_select_db($con,$dbname)  //select the database
    or die ("Could not select to mysql because ".mysqli_error());

?>
