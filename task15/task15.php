<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function findCurrDay()
{
    $array = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $day = 'Friday';
    foreach ($array as $i) {
        if ($i == $day) {
            echo "<i>" . $i . "</i>" . "<br>";
        } else {
            echo $i . "<br>";
        }
    }
}

findCurrDay();
?>
</body>
</html>