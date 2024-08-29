

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie_reviews";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_select = "SELECT email, movie, review, created_at FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql_select);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .review-container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        .review {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .review:last-child {
            border-bottom: none;
        }
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .review-header h3 {
            margin: 0;
        }
        .review-header span {
            color: #888;
            font-size: 0.9em;
        }
        .review-body {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
    include 'header&footer/header.php';
    ?>
    <h1>Movie Reviews</h1>
    <div class="review-container">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="review">
                    <div class="review-header">
                        <h3><?php echo htmlspecialchars($row['movie']); ?></h3>
                        <span><?php echo htmlspecialchars($row['created_at']); ?></span>
                    </div>
                    <div class="review-body">
                        <p><?php echo nl2br(htmlspecialchars($row['review'])); ?></p>
                        <small>Reviewed by: <?php echo htmlspecialchars($row['email']); ?></small>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No reviews found.</p>
        <?php endif; ?>
    </div>
    <?php
include 'header&footer/footer.php';
?>
</body>
</html>
