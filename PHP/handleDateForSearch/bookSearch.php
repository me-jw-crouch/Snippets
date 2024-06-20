<?php
  // Start the session to store error messages
  session_start();

  // Validate the 'date' input
  $date_input = $_GET['date'] ?? '2024-01-01'; // Default to 2024-01-01 if not set
  $date = DateTime::createFromFormat('Y-m-d', $date_input);
  $date_errors = DateTime::getLastErrors();

  if ($date_errors['warning_count'] + $date_errors['error_count'] > 0) {
      $date = new DateTime('2024-01-01'); // Set a default or handle error
      $_SESSION['error'] = "Invalid date format.";
      header('Location: errorPage.php'); // Redirect to an error page
      exit;
  }

  $date = $date->format('Y-m-d'); // Ensures date is in correct 'Y-m-d' format
  echo "Querying database for books added since: $date";
?>
