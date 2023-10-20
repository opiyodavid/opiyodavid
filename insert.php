<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<h1>insert data into the table</h1>
</head>
<body>
    <center>
        <?php
require "dbconnect.php";
$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$genre = $_REQUEST['genre'];

$sql = "INSERT INTO books (title, author, genre) VALUES ('$title','$author','$genre')";

if ($conn->query($sql) === true) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}
?>
    </center>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           