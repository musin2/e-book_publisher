<?php
    //  host name, database username, password, and database name.
   
    $con = mysqli_connect("localhost","root","","e-books");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>