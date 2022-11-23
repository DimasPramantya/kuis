<?php
session_start();
if (empty($_SESSION['username'])) {
	header("location:login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="header">
		<h1>COLLEGE STUDENT DATABASE</h1>
	</div>
	<div class="container-center">
		<div class="nav">
			<div class="title">
				<h3> Dashboard</h3>
			</div>
			<div class="navList">
				<span class="list"><a href="student.php">Student</a></span>
				<span class="list"><a href="subject.php">Subject</a></span>
				<span class="list"><a href="Transcript.php">Transcript</a></span>
			</div>
		</div>
	</div>
	<h2><?= $_SESSION['username'] ?></h2>
	<br>
</body>

</html>