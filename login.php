<?php


$link = new mysqli("localhost", "root", "", "userData");

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $link->prepare("SELECT * FROM users WHERE email=? AND user_password=?");


$stmt->bind_param("ss", $email, $password);

$stmt->execute();


$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // Starting a session
    session_start();
    $_SESSION['email'] = $email;
    // Redirecting to main.php
    header("Location: main.php");
    exit();
} else {
    // Displaying an error message if login fails
    echo "Invalid username or password";
}

$stmt->close();


$link->close();
?>
