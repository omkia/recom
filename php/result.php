<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>

<h1>Updated Array Value on Another Page:</h1>

<?php
// Start the session to access session variables
session_start();

// Check if the session variable is set
if (isset($_SESSION['updatedArray'])) {
    // Display the updated array value
    echo '<div id="updatedArrayValue">' . $_SESSION['updatedArray'][0] . '</div>';
} else {
    echo '<div>No array value found.</div>';
}
?>

</body>
</html>

