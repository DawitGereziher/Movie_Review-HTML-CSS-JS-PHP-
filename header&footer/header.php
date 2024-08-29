<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <style>
            nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #333;
                padding: 10px 20px;
                color: white;
            }

            nav .logo img {
                height: 50px;
            }

            nav h1 {
                margin: 0;
                font-size: 24px;
            }

            .nav-menu {
                list-style: none;
                display: flex;
                gap: 20px;
                margin: 0;
                padding: 0;
            }

            .nav-menu li {
                display: inline;
            }

            .nav-menu a {
                color: white;
                text-decoration: none;
                padding: 8px 16px;
                transition: background-color 0.3s;
            }

            .nav-menu a:hover {
                background-color: #575757;
            }
    </style>
</head>
<body>
<nav>
        <div class="logo">
            <img src="data:image/png;base64,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" alt="Logo">
        </div>
        <h1>Movie Review Website</h1>
        <ul class="nav-menu">
            <li><a href="main.php">Dashboard</a></li>
            <li><a href="showreview.php">View Users Review</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="manageaccount.php">Manage Account</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="index.html">LogOut</a></li>
        </ul>
    </nav>
</body>
</html>