<?php
include "connection.php";
$idPk = $_GET['id'];
$id = $_POST['id'];
$idSubject = $_POST['subjectID'];
$grade = $_POST['grade'];

$query = "UPDATE transcript SET idSubject = $idSubject, grade = $grade WHERE id = $idPk";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));