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
                            
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('includes/footer.php'); ?>