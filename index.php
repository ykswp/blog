<?php
  $pageTitle = "My Dummy Attractive Web Page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <section class="hero">
            <h1>Welcome to My Dummy Web Page</h1>
            <p>This is an attractive dummy page created using PHP, HTML, and CSS.</p>
        </section>

        <section class="features">
            <h2>Our Features</h2>
            <div class="feature-item">
                <h3>Responsive Design</h3>
                <p>Our webpage adapts to different screen sizes and devices.</p>
            </div>
            <div class="feature-item">
                <h3>Modern UI</h3>
                <p>Enjoy a clean, user-friendly interface with a modern look and feel.</p>
            </div>
            <div class="feature-item">
                <h3>Fast Loading</h3>
                <p>Pages are optimized for quick loading and a smooth user experience.</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Dummy Website. All rights reserved.</p>
    </footer>
</body>
</html>
