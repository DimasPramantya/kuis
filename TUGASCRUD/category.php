<html>

<head>
    <title>Movie Shop</title>
</head>

<body>
    <center>
        <h2>Welcome to Movie Shop </h2>
        <hr>
    </center>
    <h3> The following is a list of films by category <?= $tipe ?></h3>
    <table border=1>
    <?php
    include("database.php");
    $tipe = $_GET['tipe'];
    $query = " SELECT movie_id,title,name_gmb,director FROM dvd ";
    $query .= "WHERE tipe='$tipe'";
    $result_mysql = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_row($result_mysql)) {
        $movie_id = $row[0];
        $title = $row[1];
        $name_gmb = $row[2];
        $director = $row[3];
    ?>
        <tr><td><img src=./image/<?=$name_gmb?> height=50></td>
        <td><b><a href=detail.php?id=<?=$movie_id?>>$title</a></b><br>$director</td></tr>
    <?php }    ?>
    </table>

    <center>
        <hr>
        Address : Baker Street<br> e-mail : <a href=mailto:dvdstore@everything.com>dvdstore@everything.com</a>
    </center>
</body>

</html>