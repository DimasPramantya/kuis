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
		<h1>COLLEGE STUDENT TRANSCRIPT</h1>
	</div>
	<span class="button-insert"><a href="insertTrans.php">Insert</a></span>
	<div class="table-container">
		<table class="table table-striped">
			<thead>
				<td>NIM</td>
				<td>Name</td>
				<td>Subject</td>
				<td>Grade</td>
				<td>Action</td>
			</thead>
			<tbody>
				<?php
				include "connection.php";
				$query = "SELECT * FROM transcript";
				$result = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_object($result)) {
				?>
					<tr>
						<td><?php echo $data->studentNum ?></td>
						<td><?php
							$join = "SELECT student.name FROM student INNER JOIN transcript ON $data->studentNum = student.studentNum";
							$joinResult = mysqli_query($connect, $join);
							$finalResult = mysqli_fetch_object($joinResult);
							echo $finalResult->name;
							?></td>
						<td><?php echo $data->idSubject ?></td>
						<td><?php
							$temp = $data->grade;
							if ($temp > 80 && $temp <= 100) {
								$temp = 'A';
							} else if ($temp > 60 && $temp <= 80) {
								$temp = 'B';
							} else if ($temp > 40 && $temp <= 60) {
								$temp = 'C';
							} else if ($temp > 20 && $temp <= 40) {
								$temp = 'D';
							} else if ($temp > 0 && $temp <= 20) {
								$temp = 'E';
							}
							echo $temp;
							?>
						</td>
						<td><a href=deleteTrans.php?id=<?php echo $data->id ?>><button>Delete</button></a>
							<a href=updateTrans.php?id=<?php echo $data->id ?>><button>Edit</button></a>
						</td><br>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>