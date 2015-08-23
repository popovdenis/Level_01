<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function countNum()
{
    $count = 0;
    $arr = array(4, 2, 5, 19, 13, 0, 10);
    foreach ($arr as $i) {
        $count++;
    }
    return $count;
}

echo countNum() . "<br>";

?>
</body>
</html>