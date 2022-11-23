<?php
include "connection.php";
$id = $_GET['id'];
$query = "DELETE FROM subject WHERE id = $id";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
