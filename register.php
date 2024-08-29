<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$link = mysqli_connect($serverName, $userName, $password);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS userData";
$link->query($sql);

$link->select_db("userData");

$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL PRIMARY KEY,
    user_password VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL
)";
mysqli_query($link, $sql_create_table);

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$dateOfBirth = $_POST['dateofbirth'];

$sql_insert = "INSERT INTO users (first_name, last_name, email, user_password, date_of_birth) VALUES (?, ?, ?, ?, ?)";
$stmt = $link->prepare($sql_insert);

if ($stmt) {
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $dateOfBirth);

    if ($stmt->execute()) {
        session_start();
        $_SESSION["email"] = $email;
        
        header("Location: main.php");
        exit();
    } else {

        echo "ERROR: Could not execute query: $sql_insert. " . mysqli_error($link);
    }
    $stmt->close();
} else {
    echo "ERROR: Could not prepare query: $sql_insert. " . mysqli_error($link);
}
mysqli_close($link);
?>
