<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
        }

        .footer-section {
            flex: 1;
            padding: 10px;
        }

        .footer-section h2 {
            color: #f4f4f4;
            font-size: 20px;
        }

        .footer-section p {
            color: #cccccc;
            font-size: 14px;
            line-height: 1.6;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #cccccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #ffffff;
        }

        .footer-section .social-links a {
            margin-right: 10px;
        }

        .footer-section .social-links img {
            width: 32px;
            height: 32px;
            transition: transform 0.3s;
        }

        .footer-section .social-links img:hover {
            transform: scale(1.1);
        }

        .footer-bottom {
            text-align: center;
            padding: 10px;
            background-color: #222;
            color: #cccccc;
            font-size: 14px;
            border-top: 1px solid #444;
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>We provide honest and in-depth movie reviews to help you decide what to watch next.</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="showreview.php">View Users Review</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="manageaccount.php">Manage Account</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Follow Us</h2>
                <div class="social-links">
                    <li><a href="main.php">Dashboard</a></li>
                    <a href="https://facebook.com"><img src="photos&videos/facebook.png" alt="Facebook"></a>
                    <a href="https://t.me/dave_g_19"><img src="photos&videos/telegram.png" alt="Twitter"></a>
                    <a href="https://instagram.com/Dave_g_19"><img src="photos&videos/instagram.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Movie Review Website | Designed by 3rd Year Software Students
        </div>
    </footer>
</body>
</html>
