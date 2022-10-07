<?php

    $con = mysqli_connect("localhost","root","","students");
    if (!$con)
    {
        die('Connection failed: '.mysqli_connect_error());
    }
?>