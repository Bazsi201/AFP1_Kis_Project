<div class="container mt-5">
        <?php
            include 'message.php';
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add student <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Student name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>