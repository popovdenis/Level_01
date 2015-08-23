<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function arrayNum()
{
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    foreach ($array as $i) {
        if ($i % 3 == 0) {
            echo " " . $i . "<br>";
        } else {
            echo " " .$i ;
        }
    }
}
arrayNum() . "<br>";
?>
</body>
</html>