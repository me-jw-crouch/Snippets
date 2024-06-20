<?php
// Start a session to store the error messages
session_start();

// Initialize error messages array
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'] ?? null;
    $month = $_POST['month'] ?? null;

    // Validate year
    if (!isset($year) || $year < 2020 || $year > 2024) {
        $errors['year'] = "Invalid year selected.";
    }

    // Validate month
    if (!isset($month) || $month < '01' || $month > '12') {
        $errors['month'] = "Invalid month selected.";
    }

    // If no errors, proceed with the date formatting and redirection
    if (empty($errors)) {
        $date = "$year-$month-01";
        header("Location: bookSearch.php?date=$date");
        exit;
    } else {
        // Store errors in the session to show back on the form page
        $_SESSION['errors'] = $errors;
        // Redirect back to the form page (or another page where you handle the form)
        header("Location: yourFormPage.php"); // Adjust the redirection URL as needed
        exit;
    }
}
?>
