<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Arrays</title>
</head>
<body>

<?php

function random()
{
    $array = array();
    for ($i = 0; $i < 100; $i++) {
        $array[$i] = mt_rand(1, 100);
    }
    return $array;
}

function rangeNum($array)
{
    $result = array();
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] >= 5 && $array[$i] <= 15) {
            $result[] = $array[$i];
        }

        if ($array[$i] >= 30 && $array[$i] <= 45) {
            $result[] = $array[$i];
        }
    }
    return print_r($result);
}

function mulOfNum($array)
{
    $buffer = array();
    $result = 1;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 3 == 2) {
            $buffer[] = $array[$i];
        }
    }
    for ($i = 0; $i < count($buffer); $i++) {
        echo $buffer[$i] . " " . "<br>";
        $result = $result * $buffer[$i];
    }
    return $result;
}

function changeMinMax($array)
{
    sort($array);
    $tmp = $array[0];
    $array[0] = $array[99];
    $array[99] = $tmp;
    return $array[0] . " " . $array[99];
}

echo rangeNum(random($array)) . "<br>" . "<br>";
echo mulOfNum(random($array)) . "<br>" . "<br>";
echo changeMinMax(random($array)) . "<br>" . "<br>";
?>
</body>
</html>