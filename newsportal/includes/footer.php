<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for footer */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }
        .footer .footer-title {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .footer .quick-links li {
            list-style: none;
        }
        .footer .quick-links li a {
            color: white;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer .quick-links li a:hover {
            color: #007bff;
        }
        .footer .social-icons a {
            color: white;
            margin-right: 15px;
            font-size: 1.5em;
            transition: color 0.2s;
        }
        .footer .social-icons a:hover {
            color: #007bff;
        }
        .footer .bottom-bar {
            background-color: #23272b;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- About Us Section -->
                <div class="col-md-4">
                    <h5 class="footer-title">About News Portal</h5>
                    <p>News Portal is your go-to platform for the latest and most reliable news across various domains such as politics, sports, technology, entertainment, and more. Stay informed, stay connected.</p>
                </div>

                <!-- Quick Links Section -->
                <div class="col-md-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="quick-links">
                        <li><a href="/newsportal/index.php">Home</a></li>
                        <li><a href="#">World News</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="/newsportal/contact-us.php">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info & Social Media Section -->
                <div class="col-md-4">
                    <h5 class="footer-title">Contact Us</h5>
                    <p><strong>Email:</strong> ravindrakgmail.com</p>
                    <p><strong>Phone:</strong> 9115344392</p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar -->
        <div class="bottom-bar">
            <p>&copy; 2024 News Portal. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
