<?php

require('./database.php');

if (isset($_POST['edit'])) {
    $editId = $_POST['editId'];
    $editName = $_POST['editName'];
    $editEmail = $_POST['editEmail'];
}

if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateName = $_POST['updateName'];
    $updateEmail = $_POST['updateEmail'];

    $queryUpdate = "UPDATE studentinfo SET studentname = '$updateName', studentemail = '$updateEmail' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>window.location.href = "/crud-sample-tutorial/index.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Student Information</title>
</head>

<body>
    <div class="container">
        <div class="row col-lg-6 m-auto">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Update Information</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <input type="text" name="updateName"
                            value="<?php echo $editName?>"
                            class="form-control mb-2" required />
                        <input type="text" name="updateEmail"
                            value="<?php echo $editEmail?>"
                            class="form-control mb-2" required />
                        <input type="submit" name="update" value="UPDATE" class="btn btn-success" />
                        <input type="hidden" name="updateId"
                            value="<?php echo $editId?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>