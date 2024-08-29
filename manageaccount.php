

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userData";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete'])) {
    $emailToDelete = $_POST['email'];
    $sql_delete = "DELETE FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("s", $emailToDelete);
    if ($stmt->execute()) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
    $stmt->close();
}

$sql_select = "SELECT first_name, last_name, email, date_of_birth FROM users";
$result = $conn->query($sql_select);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .user-container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .user-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .user-header h3 {
            margin: 0;
        }
        .user-body {
            margin-top: 10px;
        }
        .user-body p {
            margin: 5px 0;
        }
        .delete-form {
            margin-top: 10px;
        }
        .delete-form input[type="submit"] {
            background-color: #d9534f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
    include 'header&footer/header.php';
    ?>
    <h1>Manage User Accounts</h1>
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="user-container">
                <div class="user-header">
                    <h3><?php echo htmlspecialchars($row['first_name'] . ' ' . $row['last_name']); ?></h3>
                </div>
                <div class="user-body">
                    <p>Email: <?php echo htmlspecialchars($row['email']); ?></p>
                    <p>Date of Birth: <?php echo htmlspecialchars($row['date_of_birth']); ?></p>
                    <form class="delete-form" method="post" action="">
                        <input type="hidden" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>
    <?php
include 'header&footer/footer.php';
?>
</body>
</html>
