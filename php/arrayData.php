<?php
// Initialize the array with size 4
$array = array(1, 0, 0, 0);

// Check if a button is clicked and update the array accordingly
if (isset($_POST['updateValue'])) {
    $buttonClicked = $_POST['updateValue'];

    if ($buttonClicked === 'button1') {
        $array[0] ='MCI';
    } elseif ($buttonClicked === 'button2') {
        $array[0] = 'MTN';
    }

    // Start a session to pass the array to the next page
    session_start();
    $_SESSION['updatedArray'] = $array;

    // Redirect to another HTML file
    header("Location: result.php");
	
    exit();
}
?>