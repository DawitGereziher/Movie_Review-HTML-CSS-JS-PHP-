<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_reviews";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

$sql_create_table = "CREATE TABLE IF NOT EXISTS reviews (
    email VARCHAR(255) NOT NULL PRIMARY KEY,
    movie VARCHAR(255) NOT NULL,
    review TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'reviews' created successfully or already exists<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$email = $_POST['email'];
$movie = $_POST['movie'];
$review = $_POST['review'];

$sql_insert = "INSERT INTO reviews (email, movie, review) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql_insert);

if ($stmt) {
    $stmt->bind_param("sss", $email, $movie, $review);

    if ($stmt->execute()) {
        echo "New record created successfully";

        header("Location: main.php"); 
        exit();
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>


