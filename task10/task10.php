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
    foreach ($array as $e) {
        if ($e == 2 && $e == 3 && $e == 4) {
            echo "2,3 and 4 exist";
        } else {
            echo "numbers does not exist";
            break;
        }
    }
}


echo arrayNum() . "<br>";

?>
</body>
</html>