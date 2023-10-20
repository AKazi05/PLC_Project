<?php 
include 'header.php';
include 'sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Anatomical Fitness</title>
</head>
<body>
    <h1>Contact Us</h1>

    <form action="submit_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
