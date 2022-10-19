<?php

require('./read.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD | Sample Tutorial</title>
</head>

<body>
    <div class="container">
        <div class="row col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Student Information</h2>
                </div>
                <div class="card-body">
                    <form action="/crud-sample-tutorial/create.php" method="post">
                        <input type="text" name="studentname" placeholder="Enter your Name" class="form-control mb-2"
                            required />
                        <input type="text" name="studentemail" placeholder="Enter your Email" class="form-control mb-2"
                            required />
                        <input type="submit" name="create" value="CREATE" class="btn btn-success" />
                    </form>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($results = mysqli_fetch_array($sqlRead)) { ?>
                            <tr>
                                <td><?php echo $results['id'] ?>
                                </td>
                                <td><?php echo $results['studentname'] ?>
                                </td>
                                <td><?php echo $results['studentemail'] ?>
                                </td>
                                <td style="display: flex; gap: 0.5rem;">
                                    <form action="/crud-sample-tutorial/update.php" method="post">
                                        <input type="submit" name="edit" class="btn btn-primary" value="EDIT">
                                        <input type="hidden" name="editId" class="btn btn-primary"
                                            value="<?php echo $results['id'] ?>">
                                        <input type="hidden" name="editName" class="btn btn-primary"
                                            value="<?php echo $results['studentname'] ?>">
                                        <input type="hidden" name="editEmail" class="btn btn-primary"
                                            value="<?php echo $results['studentemail'] ?>">
                                    </form>
                                    <form action="/crud-sample-tutorial/delete.php" method="post">
                                        <input type="submit" name="delete" class="btn btn-danger" value="DELETE">
                                        <input type="hidden" name="deleteId" class="btn btn-danger"
                                            value="<?php echo $results['id']?>">

                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>