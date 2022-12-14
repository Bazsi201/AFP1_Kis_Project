<?php
    require 'dbcon.php';
    session_start();

    if (isset($_POST['delete_student']))
    {
        $studentID = mysqli_real_escape_string($con,$_POST['delete_student']);
        $query = "DELETE FROM students WHERE id = '$studentID'";
        $result = mysqli_query($con,$query);
        if ($result)
        {
            $_SESSION['message'] = "Student deleted successfully.";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Student not deleted successfully.";
            header("Location: index.php");
            exit(0);
        }
    }

    if (isset($_POST['update_student']))
    {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['course'])) {
            include('includes/emptyFields.php');
        }
        else {
            $studentID = mysqli_real_escape_string($con,$_POST['studentID']);
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $course = mysqli_real_escape_string($con,$_POST['course']);

            $checkEmailQuery = mysqli_query($con, "SELECT * FROM students WHERE id != '$studentID' AND email = '$email'");
            $checkPhoneQuery = mysqli_query($con, "SELECT * FROM students WHERE id != '$studentID' AND phone = '$phone'");
            if (mysqli_num_rows($checkEmailQuery) == 0)
            {
                if (mysqli_num_rows($checkPhoneQuery) == 0)
                {
                    $query = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course = '$course' WHERE id = '$studentID'";
                    $result = mysqli_query($con,$query);
                    if ($result)
                    {
                        $_SESSION['message'] = "Student updated successfully.";
                        header("Location: index.php");
                        exit(0);
                    }
                    else
                    {
                        $_SESSION['message'] = "Student not updated successfully.";
                        header("Location: index.php");
                        exit(0);
                    }
                }
                else
                {
                    include('includes/phoneExists.php');
                }
            }
            else{
                include('includes/emailExists.php');
            }
        }
    }

    if (isset($_POST['save_student']))
    {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['course'])) {
            include('includes/emptyFields.php');
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
                    if ($result)
                    {
                        $_SESSION['message'] = "Student created successfully.";
                        header("Location: index.php");
                        exit(0);
                    }
                    else
                    {
                        $_SESSION['message'] = "Student not created successfully.";
                        header("Location: index.php");
                        exit(0);
                    }
                }
                else
                {
                    include('includes/phoneExists.php');
                }
            }
            else
            {
                include('includes/emailExists.php');
            }
        }
    }
?>