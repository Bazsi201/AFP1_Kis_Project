<?php
    require 'dbcon.php';

    if (isset($_POST['save_student']))
    {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['course'])) {
        }
        else
        {
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $course = mysqli_real_escape_string($con,$_POST['course']);

            $checkEmailQuery = mysqli_query($con,"SELECT * FROM students WHERE email = '$email'");
            $checkPhoneQuery = mysqli_query($con,"SELECT * FROM students WHERE phone = '$phone'");
            if (mysqli_num_rows($checkEmailQuery) == 0) {
                if (mysqli_num_rows($checkPhoneQuery) == 0) {
                    $query = "INSERT INTO students (name, email, phone, course) VALUES ('$name','$email','$phone','$course')";
                    $result = mysqli_query($con,$query);
                }
            }
        }
    }
?>