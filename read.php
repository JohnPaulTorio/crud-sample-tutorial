<?php

require('./database.php');

$queryRead = "SELECT * FROM studentinfo";
$sqlRead = mysqli_query($connection, $queryRead);
