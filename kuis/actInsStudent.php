<?php
include "connection.php";
$studentNum = $_POST['studentNum'];
$name = $_POST['name'];

$query = "INSERT INTO student VALUES('$studentNum','$name')";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));