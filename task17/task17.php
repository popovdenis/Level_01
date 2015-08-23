<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
function pyramidNum()
{
    for ($i = 1; $i < 9; $i++) {
        if ($i == 1) {
            echo 1 . "<br>";
        }
        for ($j = 0; $j <= $i; $j++) {
            $s = $i + 1;
            echo $s;
        }
        echo "<br>";
    }
}
pyramidNum();
?>
</body>
</html>