<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "connection.php";
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM transcript WHERE id = $id");
    $data = mysqli_fetch_object($query);
    ?>
    <div class="header">
        <h1>COLLEGE STUDENT TRANSCRIPT</h1>
    </div>
    <div class="titleInsert">Insert Data</div>
    <form method="POST" action=actUpdtTrans.php?id=<?= $data->id ?>>
        <label>
            NIM
        </label>
        <input type="text" name="id" placeholder="id" value="<?= $data->studentNum ?>" readonly><br>
        <label>
            Name
        </label>
        <input type="text" name="name" placeholder="name" value="<?php
            $join = "SELECT student.name FROM student INNER JOIN transcript ON $data->studentNum = student.studentNum";
            $joinResult = mysqli_query($connect, $join);
            $finalResult = mysqli_fetch_object($joinResult);
            echo $finalResult->name;
        ?>" readonly><br>
        <label>
            Subject
        </label>
        <select name="subjectID">
            <?php
            include "connection.php";
            $query = "SELECT * FROM subject";
            $result = mysqli_query($connect, $query);
            while ($data = mysqli_fetch_object($result)) {
            ?>
                <option value="<?= $data->id ?>"><?php echo $data->name ?></option><br>
            <?php } ?>
        </select><br>
        <label>Grade</label>
        <input type="number" name="grade" placeholder="grade"><br>
        <input type="submit" name="submit" value="send">
    </form>
</body>

</html>