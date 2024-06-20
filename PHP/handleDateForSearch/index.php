<?php
// Start the session to access session variables
session_start();

// Retrieve error messages if any
$errors = $_SESSION['errors'] ?? [];
?>

<!-- Display errors if any -->
<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $field => $message): ?>
            <li><?= htmlspecialchars($message) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<form action="handleDate.php" method="POST">
    <label for="year">Year:</label>
    <select name="year" id="year">
        <?php
        for ($year = (int) date("Y"); $year >= 2020; $year--) {
            echo "<option value='$year'>$year</option>";
        }
        ?>
    </select>

    <label for="month">Month:</label>
    <select name="month" id="month">
        <?php
        for ($month = 1; $month <= 12; $month++) {

            // Leading zero for single-digit months
            $formattedMonth = str_pad($month, 2, "0", STR_PAD_LEFT);
            echo "<option value='$formattedMonth'>$formattedMonth</option>";
        }
        ?>
    </select>

    <input type="submit" value="Search Books">
</form>
