<?php include "config.php"; ?>

<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the success message in a session variable

    // Redirect to the last page
    header("location: " . $_SERVER['HTTP_REFERER']);
} else {
    echo "Invalid request.";
}
?>
