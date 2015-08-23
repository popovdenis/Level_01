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
    $array = array(4, 2, 5, 19, 13, 0, 10);
    foreach ($array as $i) {
        if ($i >= 3 && $i <= 10) {
            print ($i . " ");
        }
    }
}
echo arrayNum() . "<br>";

?>
</body>
</html>