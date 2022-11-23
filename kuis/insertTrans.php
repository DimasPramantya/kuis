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
	<div class="titleInsert"><h1>Insert Data</h1></div>
	<form method="POST" action="actInsTrans.php">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">
				NIM
			</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="id" placeholder="id">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">
				Subject
			</label>
			<div class="col-sm-10">
				<select name="subjectID" class="form-select" aria-label="Default select example">
					<?php
					include "connection.php";
					$query = "SELECT * FROM subject";
					$result = mysqli_query($connect, $query);
					while ($data = mysqli_fetch_object($result)) {
					?>
						<option value="<?= $data->id ?>"><?php echo $data->name ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">Grade</label>
			<div class="col-sm-10">
				<input class="form-control" type="number" name="grade" placeholder="grade">
			</div>
		</div>
		<input type="submit" name="submit" value="send">
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>