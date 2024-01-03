<?php
session_start();
$productsArray = range(0, 100);
// Check if a button is clicked and update the array accordingly
if (isset($_POST['updateValue'])&& isset($_POST['pNumber'])) {
    $preferenceArray= $_SESSION['updatedArray'] ;
    $buttonClicked = $_POST['updateValue'];
    $pNumber = $_POST['pNumber']-1;
    if ($buttonClicked === 'button1') {
        $preferenceArray[$pNumber] =1;
    } elseif ($buttonClicked === 'button2') {
        $preferenceArray[$pNumber] = 2;
    }
    $pNumber +=2;
    // Start a session to pass the array to the next page
    $_SESSION['updatedArray'] = $preferenceArray;
    $_SESSION['pNumber'] =  $pNumber;
    $_SESSION['result'] = $productsArray [array_sum($preferenceArray)];
    exit();
}
else{
    // Initialize the array with size 4
    $preferenceArray = array(0, 0, 0, 0);
    // Start a session to pass the array to the next page
    $buttonClicked = $_POST['updateValue'];
    $pNumber = $_POST['pNumber']-1;
    if ($buttonClicked === 'button1') {
        $preferenceArray[$pNumber] =1;
    } elseif ($buttonClicked === 'button2') {
        $preferenceArray[$pNumber] = 2;
    }
    $pNumber +=2;
    $_SESSION['updatedArray'] = $preferenceArray;
    $_SESSION['pNumber'] =  $pNumber;
    $_SESSION['result'] = $productsArray [array_sum($preferenceArray)];
    exit();
}
?>