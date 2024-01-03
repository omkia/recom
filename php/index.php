<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
</head>
<body>
<?php
$questionArray = array("q1", "q2", "q3"," q4");
$answerArray = array("11", "12", "23"," 24","35", "36", "47","48");
// Start the session to access session variables
session_start();
// Check if the session variable is set
if (isset($_SESSION['pNumber'])) {
    // Display the updated array value
    $pNumber=$_SESSION['pNumber'];
    $prefList=($_SESSION['updatedArray']);
   echo '<div id="updatedArrayValue">' .'user preference: '.  print_r($prefList) .' <br>page number: '. $_SESSION['pNumber'] .'</div>';
} else {
    $pNumber=1;
    echo '<div>No array value found.</div>';
}
?>
<h1>Operator:</h1>
<div id="arrayValues"><?php echo $questionArray[$pNumber-1]; ?></div>

<button onclick="updateArray('button1')"><?php echo $answerArray[$pNumber*2-2]; ?></button>
<button onclick="updateArray('button2')"><?php echo $answerArray[$pNumber*2-1]; ?></button>

<script>
    function updateArray(button) {
        // Use AJAX to send the button clicked information to the server (PHP)
        var xmlhttp = new XMLHttpRequest();
        var pNumber= <?php echo  $pNumber ?>;
       xmlhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
                // Redirect to another HTML file after receiving the response
                if(pNumber==4){
                    window.location.href = 'result.php';
                }
                else{
                    window.location.href = 'index.php';
                }
           }
      };
        xmlhttp.open("POST", "arrayData.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("updateValue=" + button+'&pNumber='+<?php echo  $pNumber ?>);
    }
</script>
<?php
if( $pNumber==5)
    {
         session_destroy();
    }
 ?>
</body>
</html>
