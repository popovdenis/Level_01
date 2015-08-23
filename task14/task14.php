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
    $saturday = 'Saturday';
    $sunday = 'Sunday';
    foreach ($array as $i) {
        if ($i == $saturday) {
            echo "<b>" . $i . "</b>" . "<br>";
        }
        elseif ($i == $sunday) {
            echo "<b>" . $i . "</b>" . "<br>";
        }else {
            echo $i . "<br>";
        }
    }
}

findCurrDay();
?>
</body>
</html>