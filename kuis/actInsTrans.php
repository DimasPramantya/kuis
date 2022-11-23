<?php
include "connection.php";
$id = $_POST['id'];
$idSubject = $_POST['subjectID'];
$grade = $_POST['grade'];

$query = "INSERT INTO transcript(studentNum,idSubject,grade) VALUES('$id','$idSubject', '$grade')";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));