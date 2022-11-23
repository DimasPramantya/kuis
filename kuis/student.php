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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
	<div class="header">
		<h1>COLLEGE STUDENT DATA</h1>
	</div>
	<span class="button-insert"><a href="insertStudent.php">Insert</a></span>
	<div class="table-container">
		<table class="table table-striped">
			<thead>
				<td>Student Num</td>
				<td>Name</td>
				<td>Action</td>
			</thead>
			<tbody>
				<?php
				include "connection.php";
				$query = "SELECT * FROM student";
				$result = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_object($result)) {
				?>
					<tr>
						<td><?php echo $data->studentNum ?></td>
						<td><?php echo $data->name ?></td>
						<td>
							<a href=deleteStudent.php?id=<?= $data->studentNum ?>><button>Delete</button></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<h2><?= $_SESSION['username'] ?></h2>
	<br>
	<a href='logout.php'>Logout</a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>