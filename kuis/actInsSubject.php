<?php
include "connection.php";
$id = $_POST['id'];
$name = $_POST['name'];

$query = "INSERT INTO subject VALUES('$id','$name')";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));