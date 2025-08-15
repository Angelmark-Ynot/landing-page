<?php
// landing.php
// Optional: You can set variables to reuse in HTML
$title = "Welcome to My Landing Page";
$subtitle = "Your journey starts here!";
$year = date("Y"); // dynamic current year
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #6a11cb, #2575fc);
            color: white;
            text-align: center;
        }
        header {
            padding: 60px 20px;
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        a.button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #ffcc00;
            color: #000;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }
        a.button:hover {
            background-color: #ffaa00;
        }
        footer {
            margin-top: 50px;
            padding: 15px;
            background: rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $subtitle; ?></p>
    <a href="#learn-more" class="button">Learn More</a>
</header>

<section id="learn-more" style="padding:40px 20px;">
    <h2>About Us</h2>
    <p>We provide solutions that help you achieve your dreams. Our team is dedicated to excellence and innovation.</p>
</section>

<footer>
    &copy; <?php echo $year; ?> My Company. All rights reserved.
</footer>

</body>
</html>
