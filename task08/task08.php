<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function sumNum()
{
    $result = 0;
    $array = array(1, 20, 15, 17, 24, 35);
    foreach ($array as $i) {
        $result += $i;
    }
    return $result;
}
echo sumNum() . "<br>";

function mulNum()
{
    $result = 0;
    $array = array(26, 17, 136, 12, 79, 15);
    foreach ($array as $i) {
        $result += $i * $i;
    }
    return $result;
}
echo mulNum(). "<br>";

function strNum()
{
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    foreach ($array as $i) {
     echo  "-" . $i ;
    }
}
echo strNum(). "-<br>";

?>
</body>
</html>