<?php
    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

<div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Student details
                    <a href="studentCreate.php" class="btn btn-primary float-end">Add students</a>
                    </h4>
                        <div class="card-body">
                            <table class="table table-bordered table-striped align-middle" style="text-align:center">
                                <thead>
                                    <tr>
                                        <th>Student name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Course</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query = "SELECT * FROM students";
                                    $result = mysqli_query($con,$query);
                                    if (mysqli_num_rows($result) > 0)
                                    {
                                        foreach ($result as $student)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?= $student['name']; ?></td>
                                                    <td><?= $student['email']; ?></td>
                                                    <td><?= $student['phone']; ?></td>
                                                    <td><?= $student['course']; ?></td>
                                                    <td>
                                                        <a href="studentView.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('includes/footer.php'); ?>