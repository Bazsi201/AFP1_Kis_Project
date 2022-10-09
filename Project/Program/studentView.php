<?php include('includes/header.php'); ?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>View student details <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
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
                                            <div class="mb-3">
                                            <label>Student name</label>
                                            <p class="form-control"><?= $student['name']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                            <label>Student email</label>
                                            <p class="form-control"><?= $student['email']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                            <label>Student phone</label>
                                            </div>
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('includes/footer.php'); ?>