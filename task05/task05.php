<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<?php

function insertNumToArr()
{
    $array = array();
    for ($i = 1; $i <= 100; $i++) {
        $array[] = $i;
    }
    return $array;
}

function getNum11_33()
{
    $array = array();
    $i = 11;
    while ($i <= 33) {
        $array[] = $i;
        $i++;
    }
    return $array;
}


function getEvenNum()
{
    $array = array();
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return $array;
}


function getOddNum()
{
    $array = array();
    for ($i = 1; $i <= 50; $i++) {
//        if ($i % 2 != 0) {
//      if ($i & 1 == 1){
        if (fmod($i, 2) != 0) {
            $array[] = $i;
        }
    }
    return $array;
}


foreach (insertNumToArr() as $i) {
    echo $i . "<br>";
}
echo "<br>" . "<br>";

foreach (getNum11_33() as $i) {
    echo $i . "<br>";
}
echo "<br>" . "<br>";

foreach (getEvenNum() as $i) {
    echo $i . "<br>";
}
echo "<br>" . "<br>";

foreach (getOddNum() as $i) {
    echo $i . "<br>";
}

?>
</body>
</html>