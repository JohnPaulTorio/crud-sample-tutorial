<?php


require('./database.php');

if (isset($_POST['create'])) {
    $studentname = $_POST['studentname'];
    $studentemail = $_POST['studentemail'];

    $queryCreate = "INSERT INTO studentinfo VALUES(null, '$studentname', '$studentemail')";
    $sqlCreate = mysqli_query($connection, $queryCreate);

    echo "Successfully Created!";
    echo '<script>window.location.href = "/crud-sample-tutorial/index.php"</script>';
}
