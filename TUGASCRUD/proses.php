<html>

<head>
    <title> Movie Shop Data Management</title>
</head>

<body>
    <center>
        <h2>Movie Shop Data Management</h2>
        <hr>
    </center>
    <?php
    include("database.php");
    $submit = $_POST['submit'];
    $title = $_POST['title'];
    $tipe = $_POST['type'];
    $name_gmb = $_POST['name_gmb'];
    $director = $_POST['director'];
    $main_lead = $_POST['writer'];
    $price = $_POST['price'];
    $desk = $_POST['desc'];
    $publication_year = $_POST['publication_year'];
    switch ($submit) {
        case "ADD":
            $query = "INSERT INTO dvd (title,tipe,name_gmb,director, main_lead,price,Desk,publication_year) VALUES ('$title','$tipe','$name_gmb','$director',
            '$main_lead','$price','$desk','$publication_year')";
            $result_mysql = mysqli_query($connection, $query);
            $message = " data added successfully ";
            break;
        case "EDIT":
            $movie_id = $_POST['movie_id'];
            $query = "UPDATE dvd SET title = '$title', tipe = '$tipe', name_gmb = '$name_gmb', director = '$director', main_lead = '$main_lead', price= $price, Desk= '$desk', publication_year = $publication_year  WHERE movie_id = $movie_id";
            $result_mysql = mysqli_query($connection, $query) or die(mysqli_error($connection));
            $message = "data berhasil diubah";
            break;
        case "REMOVE":
            $movie_id = $_POST['movie_id'];
            $query = "DELETE FROM dvd WHERE movie_id like $movie_id";
            $result_mysql = mysqli_query($connection, $query);
            $message = "data deleted successfully";
            break;
    }
    ?>
    <h3><?=$message?></h3>
</body>

</html>