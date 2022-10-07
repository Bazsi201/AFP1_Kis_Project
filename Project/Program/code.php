<?php
    require 'dbcon.php';

    if (isset($_POST['save_student']))
    {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['course'])) {
        }
        else
        {
            $name = mysqli_real_escape_string($con,$_POST['name']);
        }
    }
?>