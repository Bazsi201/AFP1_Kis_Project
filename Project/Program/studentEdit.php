<?php

    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit student <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
                    </div>
                    <div class="card-body">
                    <?php
                            if (isset($_GET['id']))
                            {
                                $studentID = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM students WHERE id = '$studentID'";
                                $result = mysqli_query($con,$query);
                                if (mysqli_num_rows($result) > 0)
                                {
                                    $student = mysqli_fetch_array($result);
                                    ?>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="studentID" value="<?= $student['id']; ?>">
                                            <div class="mb-3">
                                            <label>Student name</label>
                                            <input type="text" name="name" value="<?= $student['name']; ?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label>Student email</label>
                                            <input type="email" name="email" value="<?= $student['email']; ?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label>Student phone</label>
                                            <input type="text" name="phone" value="<?= $student['phone']; ?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label>Student course</label>
                                            <input type="text" name="course" value="<?= $student['course']; ?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" name="update_student" class="btn btn-primary">Update student</button>
                                            </div>
                                        </form>
                                    <?php
                                }
                                else
                                {
                                    echo "<h4>No such record found!</h4>";
                                }
                            }
                    ?>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('includes/footer.php'); ?>