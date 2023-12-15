<?php
$array = [1, 2, 3];

if (isset($_POST['array'])) {
    $array = $_POST['array'];
    $array[0] = 2;
}

function implode($separator, $array) {
    $result = "";
    for ($i = 0; $i < count($array); $i++) {
        if ($i > 0) {
            $result .= $separator;
        }
        $result .= $array[$i];
    }
    return $result;
}

echo implode(", ", $array);
?>
