<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Movie Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<?php
    include 'header&footer/header.php';
    ?>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to Movie Reviews! Our website is dedicated to providing honest and insightful reviews of the latest movies. Our team of experienced reviewers is passionate about cinema and committed to helping you choose the best films to watch.</p>
        <p>We cover a wide range of genres, from action-packed blockbusters to thought-provoking indie films. Our goal is to provide you with comprehensive reviews that consider various aspects of filmmaking, including direction, acting, screenplay, cinematography, and more.</p>
        <p>Thank you for visiting Movie Reviews. We hope you enjoy reading our reviews as much as we enjoy writing them!</p>
    </div>
<?php
include 'header&footer/footer.php';
?>
</body>
</html>
