<?php

require('./database.php');

if (isset($_POST['delete'])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM studentinfo WHERE id = $deleteId";
    $sqlDelete = mysqli_query($connection, $queryDelete);

    echo "Successfully Deleted!";
    echo '<script>window.location.href = "/crud-sample-tutorial/index.php"</script>';
}
