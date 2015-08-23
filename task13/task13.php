<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function findCurrMonth()
{
    $array = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
        'September', 'October', 'November', 'December');
    $month = 'August';
    foreach ($array as $i) {
        if ($i == $month) {
            echo "<b>" . $i . "</b>". "<br>";
        } else {
            echo $i . "<br>";
        }
    }
}

findCurrMonth();
?>
</body>
</html>